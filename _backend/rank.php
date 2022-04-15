<?php
require_once("header.php");
?>

<div class="container">
    <div class="mt-3">
        <div class="">
            <div class="container mt-3">
                <div class="text-center text-light">
                    <h2>ตั้งค่า Rank</h2>
                    <center>
                        <hr style="width: 150px; height: 2px; margin-top: 5px;">
                    </center>
                </div>
                <div class="row justify-content-lg-center text-light">
                    <div class="col-lg-6">
                        <form action="action/action.php" method="post">
                        <input type="hidden" name="action" value="saverank">
                            <div class="mt-3">
                                <label>Noob</label>
                                <input name="silver" class="form-control bg-dark text-white" value="<?php echo $setting_rank['silver']; ?>" placeholder="กี่คะแนนถึงจะเป็น Silver">
                            </div>
                            <div class="mt-3">
                                <label>Script Kiddle</label>
                                <input name="gold" class="form-control bg-dark text-white" value="<?php echo $setting_rank['gold']; ?>" placeholder="กี่คะแนนถึงจะเป็น Gold">
                            </div>
                            <div class="mt-3">
                                <label>Hack</label>
                                <input name="hacker" class="form-control bg-dark text-white" value="<?php echo $setting_rank['hacker']; ?>" placeholder="กี่คะแนนถึงจะเป็น Hacker">
                            </div>
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-primary">บันทึก</button>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="mt-3">

                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once("footer.php");
?>