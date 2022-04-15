<?php 
require_once dirname(__FILE__)."/../_system/system.php";
if(!isset($_SESSION['username'])){
  header("Location: /Login");
}
 ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Web title -->
    <title>HAKKA - Ranking</title>

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
</head>

<body>
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
                        <a class="nav-link textw " href="../Lesson/">Lesson</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw" href="../Lab/">Lab</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw active" href="../Rank/">Ranking</a>

                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="../Profile/" class="nav-link textw">Profile</a>
                    </li>

                </ul>
            </div>
        </nav>

    </div>

    <div class="container mt-5">
        <div class="mt-3 text-center">
            <img src="../public/img/home/hakka.png" width="500">
        </div>
        <div class="mt-5">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <center>
                    <div class="carousel-inner">
                    <?php
                    $i = 0;
                    foreach(query("SELECT * FROM lesson")->fetchAll() as $lesson){
                        $i++;
                    ?>
                        <div class="carousel-item <?php if($i == 1){echo "active";} ?>">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 mt-4">
                                    <?php 
                                        error_reporting(0);
                                        $point = account()->getPoint($lesson['id'], $_SESSION['username']);
                                        $rank = query("SELECT * FROM setting_rank WHERE id = ?", [1])->fetch();
                                        if($point >= $rank['silver'] and $point < $rank['gold'] and $point < $rank['hacker']){
                                            echo '<img src="../public/img/rank/2.png" width="200">';

                                        }elseif($point >= $rank['gold'] and $point > $rank['silver'] and $point < $rank['hacker']){
                                            echo '<img src="../public/img/rank/3.png" width="200">';

                                        }elseif($point >= $rank['hacker'] and $point > $rank['silver'] and $point > $rank['gold']){
                                            echo '<img src="../public/img/rank/4.png" width="200">';

                                        }else{
                                            echo '<img src="../public/img/rank/1.png" width="200">';
                                        }
                                    ?>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mt-3">
                                        <b><?php echo $lesson['name'] ?></b>
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn-custom-border" style="width: 250px;"><?php if($point >= $rank['silver']){echo "Noob";} ?></button>
                                    </div>
                                    <div class="mt-2">
                                        <button class="btn-custom-border" style="width: 250px;"><?php if($point >= $rank['gold']){echo "Script Kiddle";} ?></button>
                                    </div>
                                    <div class="mt-2">
                                        <button class="btn-custom-border" style="width: 250px;"><?php if($point >= $rank['hacker']){echo "Hack";} ?></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php } ?>
                    </div>

                </center>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span style="font-size: 60px;" class="fa fa-arrow-circle-left Previous" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span style="font-size: 60px;" class="fa fa-arrow-circle-right Next" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
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