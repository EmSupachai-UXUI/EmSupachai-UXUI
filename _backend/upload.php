<?php
require_once("header.php");
?>
<div class="container">
    <div class="mt-3">
        <div class="">
            <div class="container mt-3">
                <div class="text-center text-light">
                    <h2>อัพโหลดรูปภาพ</h2>
                    <center>
                        <hr style="width: 150px; height: 2px; margin-top: 5px;">
                    </center>
                </div>
                <div class="row justify-content-lg-center text-light">
                    <div class="col-lg-6">
                        <form action="action/action.php" method="post" enctype="multipart/form-data">
                            <div class="text-center">
                                <input type="hidden" name="action" value="imgupload">
                                <input name="upload" type="file" class="form-control mt-3 bg-dark text-white" required>
                            </div>
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-primary">UPLOAD</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-white text-center">
                <hr>

                </div>
                <div class="mt-3 text-white text-center">
                    <?php 
                    $upload = query("SELECT * FROM upload order by id DESC")->fetchAll();
                    arsort($upload);
                    $link = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME']."/upload/";
                    for($i=0;$i < count($upload);$i++){
                        $local = $link.$upload[$i]['upload'];
                        $id = $upload[$i]['id'];
                        echo "<a style='color: white;' href='$local' target='__blank'>$local</a> <a href='action/action.php?action=deleteimg&id=$id'>ลบภาพนี้ทันที</a><br>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once("footer.php");
?>