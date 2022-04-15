<?php require_once dirname(__FILE__)."/../../_system/system.php";

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
    <title>HAKKA - Lesson</title>

    <!-- Bootstrap CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- FONT -->

    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>

    <!-- Custom CSS -->
    <link href="../../assets/custom/style.css" rel="stylesheet">
    <link href="../../assets/custom/home.css" rel="stylesheet">
    <link href="../../assets/custom/parallax.css" rel="stylesheet">
    <link href="../../assets/custom/animation.css" rel="stylesheet">
    <link href="../../assets/custom/carousel.css" rel="stylesheet">
    <link href="../../assets/custom/border.css" media="screen" rel="stylesheet">
    <link href="../../assets/custom/test.css" media="screen" rel="stylesheet">

    <!--load all Font Awesome styles -->
    <link href="../../assets/fontawesome/css/all.css" rel="stylesheet">

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
                    <a class="nav-link textw " aria-current="page" href="../../Home/">Home</a>
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw active" href="../">Lesson</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw" href="../../Lab/">Lab</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link textw" href="../../Rank/">Ranking</a>

                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="../../Profile/" class="nav-link textw">Profile</a>
                    </li>

                </ul>
            </div>
        </nav>

    </div>

    
    <?php
    if(isset($_GET['testlist'])){
        if($_GET['testlist'] == "1"){
            require_once dirname(__FILE__)."/page/testlist1.php";
        }elseif($_GET['testlist'] == "2"){
            require_once dirname(__FILE__)."/page/testlist2.php";
        }elseif($_GET['testlist'] == "3"){
            require_once dirname(__FILE__)."/page/testlist3.php";
        }else{
            require_once dirname(__FILE__)."/page/welcome.php";
        }

    }elseif(isset($_GET['testing'])){
        if($_GET['testing'] == "1"){
            require_once dirname(__FILE__)."/page/testing.php";

        }
        if($_GET['testing'] == "2"){
            require_once dirname(__FILE__)."/page/testing.php";
            
        }
        if($_GET['testing'] == "3"){
            require_once dirname(__FILE__)."/page/testing.php";
            
        }
        if($_GET['testing'] == "incorrect"){
            require_once dirname(__FILE__)."/page/incorrect.php";
            
        }

    }else{
        require_once dirname(__FILE__)."/page/welcome.php";
    }
    
    ?>
    

  <!-- Parallax start -->
  <div class="parallax"></div>
  <!-- Parallax end -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../../assets/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>