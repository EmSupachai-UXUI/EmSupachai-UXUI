<div class="container">
    <div class="row" style="padding: 50px;">
        <div class="col-lg-3 mt-3">
            <center>
                <div class="card bg-dark text-white test">
                    <div class="container-fluid">
                        <img class="mt-4" width="100%" src="../../public/img/design/2.png">
                        <div style="padding-top: 50px; font-weight: 900;">
                            SQL Injection
                        </div>
                    </div>
                </div>
            </center>
        </div>
        <div class="col-lg-8 mt-5 text-white">
            <div style="padding-left:18px;">

            
            <!-- Profile Image
                src="link"
            -->
            <img src="https://www.finearts.cmu.ac.th/wp-content/uploads/2021/07/blank-profile-picture-973460_1280-1.png" style="border-radius: 50%; width: 80px; height: 80px; object-fit: cover;">
                <span style="padding-left: 19px;position: absolute; padding-top: 55px;"><b
                        style="color: #F0A500;">By</b> Aem Supachai</span>
                <div class="mt-5">
                    <h3><b style="color: #F0A500;">SQL Injection</b></h3>
                </div>
                <div class="mt-3">
                    <p style="font-size: 18px; line-height: 35px;">โดยเนื้อหาภายในจะมี ข้อสอบทั้งหมด 30 ข้อ
                        ซึ่งจะไม่เรียงระดับความยาก <br>
                        และจะสุ่ม <b style="color: #F0A500;">Random</b> ไปในแต่ละ <b style="color: #F0A500;">Account</b>
                        บอกเลยข้อสอบไม่เหมือนกันสักคน 5555
                    </p>
                </div>
                <div class="mt-3">
                    
                    <!-- PDF DOWNLOAD 
                    .SQLI PAGE
                
                    Ex.
                        href="Download/file.pdf"
                    -->

                    <a href="Download/file.pdf" download><button style="width: 230px;" class="btn-custom-border">เอกสาร. PDF</button></a>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="card bg-dark border-3 border-warning" style="border-radius: 18px;">
                <div class="container mt-4">
                    <div class="row">

                        <?php
                        /** PHP FetchAll Test In  */
                        $i = 0;
                        foreach(query("SELECT * FROM test WHERE lesson_id = ?", [$_GET['testlist']]) as $test){
                            if($test['hide'] != "true"){
                                $i++;
                        ?>
                        <div class="col-lg-4 text-white mt-5">
                            <a href="?testing=2"><div class="<?php if($i == 1){echo "testlist-card";}else{echo "testlist-card-2";} ?>">
                                <span class="<?php if($i >= 10){echo "testlist-num-more";}else{echo "testlist-num";} ?>"><?php echo $i; ?></span>
                                <img src="../../public/img/design/circle.svg" class="circle">
                                <div class="pass">
                                    <span class="pass-text"><?php if(query("SELECT * FROM test_history WHERE username= ? AND test_id = ?", [$_SESSION['username'], $test['id']])->rowCount() > 0){echo "Pass";}else{echo "Not Pass";} ?></span>
                                </div>
                                <div class="score">
                                    <span class="score-text"><?php echo $test['point']; ?> คะแนน</span>
                                </div>
                            </div></a>
                        </div>

                        <?php }} ?>
                    </div>

                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>

    </div>
</div>