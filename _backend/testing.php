<?php
require_once("header.php");
if(isset($_GET['id']) 
and query("SELECT * FROM test WHERE id=?", [$_GET['id']])->rowCount() > 0){
$test = query("SELECT * FROM test WHERE id=?", [$_GET['id']])->fetch();
$lesson = query("SELECT * FROM lesson WHERE id=?", [$_GET['page']])->fetch();
?>


<div class="container">
    <div class="mt-3 text-light">
        <div class="row justify-content-lg-center">
            <div class="col-lg-11">
                <h3><?php echo $lesson['name']; ?></h3>
                <a href="test.php?id=<?php echo $lesson['id']; ?>">Back</a>
                <div class="mt-4">
                </div>
                <hr>
                <center><a href="preview.php?id=<?php echo $test['id']; ?>" class="btn btn-primary">Preview</a></center>
                <hr>
            </div>
            <div class="col-lg-11">
                <center>
                    <div class="col-lg-8">
                        <form action="action/action.php" method="post">
                            <h3>แก้ไข</h3>
                            <input type="hidden" name="action" value="editquestion">
                            <input type="hidden" name="id" value="<?php echo $test['id']; ?>">
                            <input type="hidden" name="lesson_id" value="<?php echo $test['lesson_id']; ?>">
                            <div class="mt-3">
                                <input name="point" autocomplete="off" type="number"
                                    class="form-control bg-dark text-light" value="<?php echo $test['point']; ?>"
                                    placeholder="คะแนนที่จะได้รับ" required>
                            </div>
                            <div class="mt-3">
                                <textarea name="html" autocomplete="off" class="form-control bg-dark text-light"
                                    placeholder="โจทย์หรือรายละเอียดในแบบทดสอบ สามารถเขียนเป็น HTML ได้"
                                    rows="10"><?php echo $test['html']; ?></textarea>
                            </div>

                            <div class="mt-3">
                                <input name="choice_1" autocomplete="off" value="<?php echo $test['choice_1']; ?>"
                                    class="form-control bg-dark text-light" placeholder="choice 1" required>
                            </div>
                            <div class="mt-3">
                                <input name="choice_2" autocomplete="off" value="<?php echo $test['choice_2']; ?>"
                                    class="form-control bg-dark text-light" placeholder="choice 2" required>
                            </div>
                            <div class="mt-3">
                                <input name="choice_3" autocomplete="off" value="<?php echo $test['choice_3']; ?>"
                                    class="form-control bg-dark text-light" placeholder="choice 3" required>
                            </div>
                            <div class="mt-3">
                                <input name="choice_4" autocomplete="off" value="<?php echo $test['choice_4']; ?>"
                                    class="form-control bg-dark text-light" placeholder="choice 4" required>
                            </div>
                            <div class="mt-3">
                                <input name="answer" value="<?php echo $test['answer']; ?>" type="number"
                                    autocomplete="off" class="form-control bg-dark text-light" placeholder="คำตอบ 1 - 4"
                                    required>
                            </div>
                            <div class="mt-3">
                                <input value="hide" name="hide" class="" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Hide
                                </label>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-success">SAVE!!</button>
                            </div>
                        </form>
                        <hr>
                        <a onclick="confirmDelete()" class="btn btn-danger">ลบโจทย์นี้</a>
                        <script>
                        function confirmDelete() {
                            Swal.fire({
                                title: 'Are you sure?',
                                text: "You won't be able to revert this!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, delete it!'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.href =
                                        "action/action.php?action=deletetest&id=<?php echo $test['id']; ?>&page=<?php echo $lesson['id']; ?>";
                                }
                            })
                        }
                        </script>
                    </div>

                    <div class="mt-3"></div>
                </center>
            </div>
        </div>
    </div>
</div>

<?php
}
require_once("footer.php");
?>