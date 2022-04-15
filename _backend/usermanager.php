<?php
require_once("header.php");
?>
<div class="container">
    <div class="mt-3">
        <div class="">
            <div class="container mt-3">
                <div class="text-center text-light">
                    <h2>ข้อมูลผู้ใช้</h2>
                    <center>
                        <hr style="width: 150px; height: 2px; margin-top: 5px;">
                    </center>
                </div>
                <div class="row justify-content-lg-center text-light">
                    <div class="col-lg-6">
                        <form action="action/action.php" method="post">
                            <div class="text-center">
                                <input name="searchuser" class="form-control mt-3 bg-dark text-white" placeholder="Username or Email">
                            </div>
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-primary">ค้นหา</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mt-3 text-light">
                    <hr>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <?php
                            if(isset($_SESSION['edituser'])){
                                $user = $_SESSION['edituser'];
                            
                            
                            ?>
                            <div class="card bg-dark">
                                <div class="card-body">
                                    <form action="action/action.php" method="post">
                                        <input type="hidden" value="<?php echo $user['id']; ?>" name="edituser">
                                        <div class="mt-3">
                                            <label>ชื่อผู้ใช้</label>
                                            <input class="form-control bg-dark text-white"
                                                value="<?php echo $user['username']; ?>" disabled>
                                        </div>
                                        <div class="mt-3">
                                            <label>อีเมล</label>
                                            <input class="form-control bg-dark text-white"
                                                value="<?php echo $user['email']; ?>" disabled>
                                        </div>
                                        <div class="mt-3">
                                            <label>เข้าใช้งานเมื่อวันที่</label>
                                            <input class="form-control bg-dark text-white"
                                                value="<?php echo $user['date']; ?>" disabled>
                                        </div>
                                        <div class="mt-3">
                                            <label>พ้อยต์ทั้งหมด</label>
                                            <input name="point" class="form-control bg-dark text-white" type="number"
                                                value="<?php echo $user['point']; ?>">
                                        </div>
                                        <div class="mt-3">
                                            <label>Group</label>
                                            <select name="group" class="form-control bg-dark text-light">
                                                <option value="<?php echo $user['group']; ?>">- <?php echo $user['group']; ?> -</option>
                                                <option value="member">Member</option>
                                                <option value="vip">VIP</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>
                                        <div class="mt-3 text-center">
                                            <button type="submit" class="btn btn-primary">Save</button>

                                        </div>

                                    </form>
                                    <div></div>
                                </div>
                            </div>
                            <?php 
                        unset($_SESSION['edituser']);
                        } ?>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<?php
require_once("footer.php");
?>