
            <div class="col-lg-9" style="padding-top: 180px;">
                <div class="custom-border">
                    <div class="container text-white" style="position: relative;">
                        <div class="card" style="
                     background-color: #F0A500; 
                     height: 180px;">
                        </div>
                        <div class="row container">
                            <div class="col-lg-3">
                                <img width="200" height="200"
                                    src="<?php echo $link.account()->getUser()['profile']; ?>"
                                    style="
                        border-radius: 50%; 
                        border: 5px solid white;
                        position: relative; 
                        bottom: 100px;
                        object-fit: cover;">
                            </div>

                            <div class="col-lg-5 mt-3">
                                <span style="font-size: 24px; padding-left: 30px;"><?php echo account()->getUser()['username']; ?></span>

                            </div>
                            <div class="col-lg-4 text-end mt-3">
                                <button class="btn-custom-border" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal2">แก้ไขชื่อผู้ใช้</button>

                            </div>

                        </div>
                        <div class="profile-card" style="margin-top: -80px;">
                            <div style="padding-left: 50px; padding-top: 18px; font-size: 18px;">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            อีเมล
                                        </div>
                                        <div class="mt-3">
                                            <span style="color: #C4C4C4;"><?php echo account()->getUser()['email']; ?></span>
                                        </div>
                                        <div class="mt-3">
                                            รหัสผ่าน
                                        </div>
                                        <div class="mt-3">
                                            <span style="color: #C4C4C4;">**********</span>
                                        </div>
                                        <div class="mt-3">
                                            วันที่สมัครเข้าใช้งาน
                                        </div>
                                        <div class="mt-3">
                                            <span style="color: #C4C4C4;"><?php echo account()->getUser()['date']; ?></span>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 text-end">
                                        <div class="container">
                                            <br><a href="?page=changeemail"><button class="btn-custom-border"
                                                style="width: 150px;">แก้ไขอีเมล</button></a><br><br><br>
                                                <a href="?page=changepassword"><button class="btn-custom-border"
                                                style="width: 150px;">แก้ไขรหัสผ่าน</button></a>

                                        </div>

                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background: linear-gradient(144.48deg, #28272F 9.13%, #040404 62.89%);
    border: 2px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0px 0px 24px rgba(255, 255, 255, 0.4);
    border-radius: 19px;">
                <div class="modal-body text-center text-white">
                  <form action="../action.php" method="post" enctype="multipart/form-data">
                    <div class="mt-4">
                        <label>Upload Profile</label><br>
                        <input type="hidden" name="editprofile" value="true">  
                        <img for="upload" src="<?php echo $link.account()->getUser()['profile']; ?>" class="mt-2" id="output" width="200" height="200" style="border-radius: 50%; border: 5px solid white; object-fit: cover;"/><br>
                        <input name="upload" id="upload" class="form-control-lg w-75 bg-dark text-white mt-3" type="file" accept="image/*"
                            onchange="loadFile(event)">
                        <script>
                        var loadFile = function(event) {
                            var output = document.getElementById('output');
                            output.src = URL.createObjectURL(event.target.files[0]);
                            output.onload = function() {
                                URL.revokeObjectURL(output.src) // free memory
                            }
                        };
                        </script>
                    </div>

                    <div class="mt-4">
                        <label>เปลี่ยนชื่อผู้ใช้</label><br>
                        <input autocomplete="off" name="username" required class="input2 w-75" value="<?php echo account()->getUser()['username']; ?>" placeholder="ชื่อผู้ใช้">
                    </div>
                    <button type="submit" class="mt-5 btn btn-gradient-login w-50">SAVE</button>

                  </form>
                    <div class="mt-4"></div>
                </div>
            </div>
        </div>
    </div>


