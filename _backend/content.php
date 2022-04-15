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
                </div>
                <hr>
                <div class="row">
                    <?php echo $lesson['html']; ?>
                </div>
                <a href="test.php?id=<?php echo $lesson['id']; ?>"
                    class="btn btn-primary mt-3"><?php echo $lesson['button'] ?></a>
            </div>

        </div>
    </div>
    <div class="mt-5 text-light">
        <hr>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center">
                    <h3>เพิ่มเนื้อหา</h3>
                </div>
                <form action="action/action.php" method="post">
                    <input type="hidden" name="action" value="savecontent">
                    <input type="hidden" name="id" value="<?php echo $lesson['id']; ?>">
                    <div class="mt-3">
                        <label>เขียนเป็นภาษา HTML ได้เลย</label>
                        <textarea name="content" class="form-control bg-dark text-light" placeholder="Details"
                            rows="15"><?php echo $lesson['html']; ?></textarea>
                    </div>
                    <button type="submit" class="mt-3 btn btn-success">บันทึกเนื้อหา</button>
                    <a href="example_content.yml" download="example_content.yml"
                        class="mt-3 btn btn-primary">ดูตัวอย่างการวางเนื้อหา</a>
                </form>

            </div>

        </div>
        <div class="mt-5">

        </div>
    </div>
    <div class="mt-5 text-light">
        <hr>
        <div class="row justify-content-center">
            <div class="col-lg-5 text-center">
                <h3>แก้ไขปุ่ม</h3>
                <form action="action/action.php" method="post">
                    <input type="hidden" name="action" value="updatebuttoncontent">
                    <input type="hidden" name="id" autocomplete="off" value="<?php echo $lesson['id']; ?>">
                    <div class="mt-3">
                        <input name="button" type="text" placeholder="Button" class="form-control bg-dark text-light"
                            value="<?php echo $lesson['button'] ?>">
                    </div>
                    <button type="submit" class="mt-3 btn btn-success">Update</button>
                </form>

            </div>
        </div>
        <div class="mt-5">
        <hr>
        </div>
    </div>

    <div class="row justify-content-lg-center mt-5">
        <div class="col-lg-5 text-center text-white">
            <h3>แก้ไขชื่อบทเรียนภาพและรายละเอียด</h3>
            <form action="action/action.php" method="post">
                <input name="action" value="updatelesson" type="hidden">
                    <input type="hidden" name="id" autocomplete="off" value="<?php echo $lesson['id']; ?>">
                <div class="mt-3">
                    <input name="name" class="form-control bg-dark text-light" value="<?php echo $lesson['name'] ?>" placeholder="Learn name"
                        autocomplete="off" required>
                </div>
                <div class="mt-3">
                    <input name="description" class="form-control bg-dark text-light" value="<?php echo $lesson['description'] ?>" autocomplete="off"
                        placeholder="Description" required>
                </div>
                <div class="mt-3">
                    <input type="link" name="img" autocomplete="off" value="<?php echo $lesson['img'] ?>" class="form-control bg-dark text-light"
                        placeholder="วางลิงก์รูปภาพ" required>
                </div>
                    <div class="mt-3">

                        <input class="form-check-input" type="checkbox" name="vip" <?php if($lesson['vip'] == "true"){echo "checked";} ?> id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            โจทย์เฉพาะ VIP
                        </label>

                    </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>

        </div>

    </div>
    <div class="mt-5 text-light">
        <hr>
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <a onclick="confirmDelete()" class="mt-3 btn btn-danger">ลบบทเรียนและโจทย์ทั้งหมด</a>

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
                                "action/action.php?action=deletecontent&id=<?php echo $lesson['id']; ?>";
                        }
                    })
                }
                </script>
            </div>

        </div>
        <div class="mt-5">

        </div>
    </div>
</div>


<?php
}
require_once("footer.php");
?>