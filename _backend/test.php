<?php
require_once("header.php");
if(isset($_GET['id']) 
and query("SELECT * FROM lesson WHERE id=?", [$_GET['id']])->rowCount() > 0){
$lesson = query("SELECT * FROM lesson WHERE id=?", [$_GET['id']])->fetch();
?>
<div class="container">
    <div class="mt-3 text-light">
        <div class="row justify-content-lg-center">
            <div class="col-lg-11">
                <h3><?php echo $lesson['name']; ?></h3>
                <a href="lesson.php">Back</a>
                <div class="mt-4">
                    <h5>Learning path</h5>
                </div>
                <hr>
                <div class="row">
                    <?php
                    $i = 0;
                    foreach(query("SELECT * FROM test WHERE lesson_id = ?", [$lesson['id']]) as $test){
                        $i++;
                    ?>
                    <div class="col-lg-3 mt-3">
                        <div class="profile-card-2">
                            <a href="preview.php?id=<?php echo $test['id']; ?>&page=<?php echo $test['lesson_id']; ?>">
                                <img style="height: 160px; width: 100%; display: block; object-fit: cover;"
                                    src="https://i.ytimg.com/vi/0frkeDJ_1Og/maxresdefault.jpg"
                                    class="img img-responsive">
                                <div class="profile-name">
                                    <?php echo $i ?>
                                </div>
                                <div class="profile-username">
                                    <span class="badge bg-success"><?php echo $test['point']; ?> Point</span> <?php if($test['hide'] == "true"){echo '<span class="badge bg-primary">HIDE</span>';} ?>
                                    <br><span class="text-danger"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
    <div class="mt-5 text-white">
        <hr>
        <center>
            <div class="col-lg-8">
                <form action="action/action.php" method="post">
                    <h3>เพิ่มโจทย์</h3>
                    <input type="hidden" name="action" value="addquestion">
                    <input type="hidden" name="id" value="<?php echo $lesson['id']; ?>">
                    <div class="mt-3">
                        <input name="point" autocomplete="off" type="number" class="form-control bg-dark text-light"
                            placeholder="คะแนนที่จะได้รับ" required>
                    </div>
                    <div class="mt-3">
                        <textarea name="html" autocomplete="off" class="form-control bg-dark text-light"
                            placeholder="โจทย์หรือรายละเอียดในแบบทดสอบ สามารถเขียนเป็น HTML ได้" rows="10"></textarea>
                    </div>

                    <div class="mt-3">
                        <input name="choice_1" autocomplete="off" class="form-control bg-dark text-light"
                            placeholder="choice 1" required>
                    </div>
                    <div class="mt-3">
                        <input name="choice_2" autocomplete="off" class="form-control bg-dark text-light"
                            placeholder="choice 2" required>
                    </div>
                    <div class="mt-3">
                        <input name="choice_3" autocomplete="off" class="form-control bg-dark text-light"
                            placeholder="choice 3" required>
                    </div>
                    <div class="mt-3">
                        <input name="choice_4" autocomplete="off" class="form-control bg-dark text-light"
                            placeholder="choice 4" required>
                    </div>
                    <div class="mt-3">
                        <input name="answer" type="number" autocomplete="off" class="form-control bg-dark text-light"
                            placeholder="คำตอบ 1 - 4" required>
                    </div>
                    <div class="mt-3">
                        <input value="hide" name="hide" class="" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Hide
                        </label>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-success">ADD</button>
                    </div>
                </form>
            </div>
            <br>
        </center>
    </div>
</div>


<?php
}
require_once("footer.php");
?>