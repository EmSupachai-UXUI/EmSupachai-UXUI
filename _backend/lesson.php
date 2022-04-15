<?php
require_once("header.php");
?>

<div class="container">
    <div class="mt-3 text-light">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <h3>Lesson</h3>
                <a href="index.php">Back to home</a>
                <div class="mt-4">
                    <h5>Learning path</h5>
                </div>
                <hr>
                <div class="row justify-content-center">
                    <?php
                    foreach(query("SELECT * FROM lesson")->fetchAll() as $lesson){

                    
                    ?>
                    <div class="col-lg-3 mt-3">
                        <div class="profile-card-2">
                            <a href="test.php?id=<?php echo $lesson['id']; ?>">
                                <img style="height: 160px; width: 100%; display: block; object-fit: cover;"
                                    src="<?php echo $lesson['img']; ?>" class="img img-responsive">
                                <div class="profile-name">
                                    <?php echo $lesson['name']; ?>
                                </div>
                                <?php if($lesson['vip'] == "true"){ ?>
                                <div class="profile-username">
                                    <?php echo $lesson['description']; ?>
                                    <br>

                                    <span class="badge bg-primary">เฉพาะ VIP</span>
                                </div>
                                <?php }else{ ?>

                                    <div class="profile-username2">
                                    <?php echo $lesson['description']; ?>
                                    <br>
                                </div>
                                    <?php } ?>
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
        </center>
    </div>
</div>

<?php
require_once("footer.php");
?>