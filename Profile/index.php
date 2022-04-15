<?php require_once dirname(__FILE__)."/../_system/system.php";
if(!isset($_SESSION['username'])){
  header("Location: /Login");
}
$link = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME']."/upload/";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Web title -->
    <title>HAKKA - Profile</title>

    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- FONT -->

    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>

    <!-- Custom CSS -->
    <link href="../assets/custom/style.css" rel="stylesheet">
    <link href="../assets/custom/home.css" rel="stylesheet">
    <link href="../assets/custom/parallax.css" rel="stylesheet">
    <link href="../assets/custom/animation.css" rel="stylesheet">
    <link href="../assets/custom/carousel.css" rel="stylesheet">
    <link href="../assets/custom/border.css" media="screen" rel="stylesheet">

    <!--load all Font Awesome styles -->
    <link href="../assets/fontawesome/css/all.css" rel="stylesheet">

    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
<?php require_once dirname(__FILE__)."/../alert_account.php"; ?>
    <div class="container mt-3">
        <nav class="navbar navbar-expand-lg">

            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars text-white" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse fade-in" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white text-center">
                    <a class="nav-link textw " aria-current="page" href="../Home/">Home</a>
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw" href="../Lesson">Lesson</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw" href="../Lab">Lab</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw" href="../Rank">Ranking</a>

                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="../Profile/" class="nav-link textw active">Profile</a>
                    </li>

                </ul>
            </div>
        </nav>

    </div>

    <div class="container">
        <img src="../public/img/home/hakka.png" style="position: absolute;" width="450">
        <div class="row">
            <div class="col-lg-3" style="padding-top: 220px;">
                <div class="custom-border text-white" style="width: 15rem;">
                    <div
                        style="padding-left: 18px;font-size: 16px; font-weight: 600;position: relative; letter-spacing: 1px;">
                        <div class="mt-4">
                            <a href="?page=infomation" <?php if(!isset($_GET['page']) or $_GET['page'] == "infomation"){echo 'class="orange"';} ?> >ข้อมูลผู้ใช้</a>
                        </div>
                        <div class="mt-4" style="line-height: 37.5px;">
                            <a href="?page=editprofile" <?php if(isset($_GET['page']) && $_GET['page'] == "editprofile"){echo 'class="orange"';} ?>>ปรับแต่งโปรไฟล์</a>
                        </div>
                        <div class="mt-4" style="line-height: 37.5px;">
                            <a href="?page=skill" <?php if(isset($_GET['page']) && $_GET['page'] == "skill"){echo 'class="orange"';} ?>>สกิลความสามารถ</a>
                        </div>
                        <div class="mt-4" style="line-height: 37.5px;">
                            <a href="?page=connect" <?php if(isset($_GET['page']) && $_GET['page'] == "connect"){echo 'class="orange"';} ?>>เชื่อมต่อบัญชี</a>
                        </div>
                        <div class="mt-4" style="line-height: 37.5px;">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">ออกจากระบบ</a>
                        </div>
                        <div class="mt-4">

                        </div>
                    </div>
                </div>
            </div>


            <!-- LOAD PAGE -->

            <?php
            if(isset($_GET['page'])){
              if($_GET['page'] == "infomation"){
                require_once dirname(__FILE__)."/page/home.php";
              }elseif($_GET['page'] == "changeemail"){
                require_once dirname(__FILE__)."/page/changeemail.php";
              }elseif($_GET['page'] == "changepassword"){
                require_once dirname(__FILE__)."/page/changepassword.php";
              }elseif($_GET['page'] == "editprofile"){
                require_once dirname(__FILE__)."/page/profile_edit.php";
              }elseif($_GET['page'] == "connect"){
                require_once dirname(__FILE__)."/page/connect.php";
              }elseif($_GET['page'] == "skill"){
                require_once dirname(__FILE__)."/page/skill.php";
              }
            }else{
              
              require_once dirname(__FILE__)."/page/home.php";
            }
            
            ?>





































        </div>
    </div>
    





























    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background: linear-gradient(144.48deg, #28272F 9.13%, #040404 62.89%);
    border: 2px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0px 0px 24px rgba(255, 255, 255, 0.4);
    border-radius: 19px;">
                <div class="modal-body text-center text-white">
                    <div class="mt-5">
                        <h2>คุณต้องการออกจากระบบ ?</h2>
                    </div>
                    <div class="mt-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                <a href="../action.php?logout" type="button" class="btn btn-gradient-login">ยืนยัน</a>

                            </div>
                            <div class="col-lg-4">
                                <button type="button" class="btn btn btn-gradient-border-login"
                                    data-bs-dismiss="modal">ยกเลิก</button>

                            </div>

                        </div>

                    </div>
                    <div class="mt-5"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Parallax start -->
    <div class="parallax"></div>
    <!-- Parallax end -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../assets/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>