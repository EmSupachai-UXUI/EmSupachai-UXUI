<?php require_once dirname(__FILE__)."/../_system/system.php";
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
  <title>HAKKA - Home</title>

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
          <a class="nav-link textw active" aria-current="page" href="../Home/">Home</a>
          <li class="nav-item">

          </li>
          <li class="nav-item">
            <a class="nav-link textw" href="../Lesson/">Lesson</a>

          </li>
          <li class="nav-item">
            <a class="nav-link textw" href="../Lab/">Lab</a>

          </li>
          <li class="nav-item">
            <a class="nav-link textw" href="../Rank/">Ranking</a>

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

  <div class="container-fluid mt-5">
    <div class="container">
      <div class="row justify-content-center scale-in-center">
        <div class="col-lg-12 mt-5 home1">
          <span>ยินดีต้อนรับเข้าสู่เว็บไซต์</span>
        </div>
        <div class="col-lg-8">
          <img width="100%" src="../public/img/home/hakka.png">
        </div>
        <div class="col-lg-12 mt-5 text-center">
          <a href="#scroll"><i style="color: #F0A500; font-size: 4rem;" class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
        </div>
      </div>

    </div>
    <div id="scroll" style="top: 1000px; position: absolute; color: white;"></div>
    <!-- Parallax start -->
    <div class="parallax"></div>
    <!-- Parallax end -->

    <div class="row">
      <div class="col-lg-7 mt-3">
        <div class="container">

          <img style="width: 80%;" src="../public\img\home\plchakka305815-1bse-900w.png">
        </div>
      </div>
      <div class="col-lg-5 text-white mt-3">
        <div class="container">

          <h1 style="color: #F0A500;">เนื้อหาทั้งหมดภายเว็บไซต์</h1>
          <img width="80%" src="../public/img/home/hakka.png">
          <h3 style="color: #F0A500;">เราจัดทำขึ้นเพื่อคนที่สนใจอยากเรียนรู้ด้านไซเบอร์</h3>
          <p>ภายในเว็บไซต์ของเรานะครับเป็นเว็บที่จะมีเนื้อหาการสอนในเรื่องของ
            <b style="color: #F0A500;">Cyber Security</b> และเนื้อของภัยอันตรายทางไซเบอร์ ซึ่งอ้างอิงมากจาก
            <b style="color: #F0A500;">Owasp Top 10</b> โดยได้มีการยกตัวอย่างมาทั้งหมด 2 ตัวที่พบเจอได้บ่อย ๆ ภายใน
            เว็บไซต์ต่างๆ เป็นต้น และเราจะมาสอนคุณให้รู้เท่าทันภัยอันตรายเหล่านี้และสามารถ
            ป้องกันมันได้อย่างถูกวิธีที่สุดกันครับผม</p>
          <br>
          <a href="../Lesson/" style="width: 250px;" class="btn btn-custom btn-glow">เริ่มต้นบทเรียน</a>
        </div>
      </div>
    </div>


    <!-- Parallax start -->
    <div class="parallax"></div>
    <!-- Parallax end -->

    <div class="row">
      <div class="col-lg-5 text-white mt-3">
        <div class="container">

          <h1 style="color: #F0A500;">เว็บไซต์ที่รวบรวมช่องโหว่เอาไว้มากมาย</h1>
          <img width="80%" src="../public/img/home/owasp.png">
          <h3 style="color: #F0A500;">แหล่งรวมความรู้ด้านช่องโหว่</h3>
          <p><b style="color: #F0A500;">OWASP TOP 10</b> เป็นเว็บไซต์ที่มีการรวบรวมช่องโหว่ที่เราสามารถผมเจอได้บ่อย
            ที่สุดเอาไว้โดยในแต่ละปีจะมีการจัดอันดับช่องโหว่แต่ละตัวขึ้นมาและภายในเว็บไซต์ยัง
            มีเนื้อหาอีกหลายอย่าง อาทิเช่น การป้องกันช่องโหว่ เป็นต้น</p>
          <br>
          <a href="https://owasp.org/Top10/" target="__blank" style="width: 250px;" class="btn btn-custom btn-glow">เข้าสู่เว็บไซต์</a>
        </div>
      </div>
      <div class="col-lg-7 mt-3">
        <div class="container text-end">

          <img style="width: 80%;" src="../public\img\home\pictop10305805-b8eq-900w.png">
        </div>
      </div>
    </div>


    <!-- Parallax start -->
    <div class="parallax"></div>
    <!-- Parallax end -->

    <div class="row">
      <div class="col-lg-7 mt-3">
        <div class="container">

          <img style="width: 80%;" src="../public\img\home\picthm305795-t8hw-900w.png">
        </div>
      </div>
      <div class="col-lg-5 text-white mt-3">
        <div class="container">

          <h1 style="color: #F0A500;">เว็บไซต์ที่เป็นแรงบันดาลใจในการทำ</h1><br>
          <img width="90%" src="../public/img/home/hack.png"><br><br>
          <h3 style="color: #F0A500;">เว็บไซต์สำหรับการเรียนรู้ช่องโหว่ครบวงจร</h3>
          <p>ภาพในเว็บไซต์จะมีเนื้อหามามายเกี่ยวเรื่องช่องโหว่มีทั้งโจทย์ถามตอบและยังแลป
            ทดสอบให้ได้ลองเล่นระหว่างเรียนอีกด้วยครับ</p><br>
          <a href="https://tryhackme.com/" target="__blank" style="width: 250px;" class="btn btn-custom btn-glow">เข้าสู่เว็บไซต์</a>
        </div>
      </div>
    </div>


    <!-- Parallax start -->
    <div class="parallax"></div>
    <!-- Parallax end -->

    <div class="row justify-content-center">
      <div class="col-lg-12 text-center">
        <h2 style="color: #F0A500;">ผู้จัดทำเว็บไซต์นี้ขึ้นมา</h2>
      </div>
      <div class="col-lg-3">
        <img width="100%" src="../public/img/home/hakka.png">
      </div>
    </div>


  </div>

  <div class="container mt-5">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <center>
        <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="card text-center" style="border-radius: 20px; width: 18rem;">
            <div style="width: 100%; height: 18rem;">
            <!-- Profile Aem -->
            <img class="profile-img" src="https://resource.nationtv.tv/resource/photo_news/2020/10/16/1024_a7cgbk9j5bj57i68a9bgg.jpg">
            </div>
            <div>
              <a style="width: 95%;" class="btn btn-custom btn-glow mt-2">UX / UI Designer</a>
            </div>
            <div class="mt-2"></div>
          </div>
          <div class="mt-3"><h2 style="color: #F0A500;">Aem Supachai</h2></div>
          <div class="mt-3 text-white" style="font-size:19px;">
            เป็นนักศึกษา <b style="color:#F0A500;">Bangkok University</b> <br>
            ศึกษาอยู่ คณะวิศวกรรมศาสตร์ สาขาไฟฟ้ากำลัง
          </div>
        </div>
        <div class="carousel-item">
  
          <div class="card text-center" style="border-radius: 20px; width: 18rem;">
            <div style="width: 100%; height: 18rem;">
            <!-- Profile Kao -->
            <img class="profile-img" src="https://resource.nationtv.tv/resource/photo_news/2020/10/16/1024_a7cgbk9j5bj57i68a9bgg.jpg">
            </div>
            <div>
              <a style="width: 95%;" class="btn btn-custom btn-glow mt-2">Research</a>
            </div>
            <div class="mt-2"></div>
          </div>
          <div class="mt-3"><h2 style="color: #F0A500;">Kao Possawat</h2></div>
          <div class="mt-3 text-white" style="font-size:19px;">
            เป็นนักศึกษา <b style="color:#F0A500;">Bangkok University</b> <br>
            ศึกษาอยู่ คณะวิศวกรรมศาสตร์ สาขาไฟฟ้ากำลัง
          </div>
        </div>
        <div class="carousel-item">
  
          <div class="card text-center" style="border-radius: 20px; width: 18rem;">
            <div style="width: 100%; height: 18rem;">
            <!-- Profile Gab -->
            <img class="profile-img" src="https://resource.nationtv.tv/resource/photo_news/2020/10/16/1024_a7cgbk9j5bj57i68a9bgg.jpg">
  
            </div>
            <div>
              <a style="width: 95%;" class="btn btn-custom btn-glow mt-2">Research</a>
            </div>
            <div class="mt-2"></div>
          </div>
          <div class="mt-3"><h2 style="color: #F0A500;">Gab Chairat</h2></div>
          <div class="mt-3 text-white" style="font-size:19px;">
            เป็นนักศึกษา <b style="color:#F0A500;">Bangkok University</b> <br>
            ศึกษาอยู่ คณะวิศวกรรมศาสตร์ สาขาไฟฟ้ากำลัง
          </div>
        </div>
        <div class="carousel-item">
  
          <div class="card text-center" style="border-radius: 20px; width: 18rem;">
            <div style="width: 100%; height: 18rem;">
            <!-- Profile Bank -->
            <img class="profile-img" src="https://resource.nationtv.tv/resource/photo_news/2020/10/16/1024_a7cgbk9j5bj57i68a9bgg.jpg">
  
            </div>
            <div>
              <a style="width: 95%;" class="btn btn-custom btn-glow mt-2">Back - End Dev</a>
            </div>
            <div class="mt-2"></div>
          </div>
          <div class="mt-3"><h2 style="color: #F0A500;">Bank Nopparat</h2></div>
          <div class="mt-3 text-white" style="font-size:19px;">
            เป็นนักศึกษา <b style="color:#F0A500;">Bangkok University</b> <br>
            ศึกษาอยู่ คณะวิศวกรรมศาสตร์ สาขาไฟฟ้ากำลัง
          </div>
        </div>
        <div class="carousel-item">
  
          <div class="card text-center" style="border-radius: 20px; width: 18rem;">
            <div style="width: 100%; height: 18rem;">
            <!-- Profile Poom -->
            <img class="profile-img" src="https://resource.nationtv.tv/resource/photo_news/2020/10/16/1024_a7cgbk9j5bj57i68a9bgg.jpg">
  
            </div>
            <div>
              <a style="width: 95%;" class="btn btn-custom btn-glow mt-2">Front - End Dev</a>
            </div>
            <div class="mt-2"></div>
          </div>
          <div class="mt-3"><h2 style="color: #F0A500;">Poom Thanapoom</h2></div>
          <div class="mt-3 text-white" style="font-size:19px;">
            เป็นนักศึกษา <b style="color:#F0A500;">Bangkok University</b> <br>
            ศึกษาอยู่ คณะวิศวกรรมศาสตร์ สาขาไฟฟ้ากำลัง
          </div>
        </div>
      </div>

      </center>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span style="font-size: 60px;" class="fa fa-arrow-circle-left Previous" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span style="font-size: 60px;" class="fa fa-arrow-circle-right Next" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </div>

  <!-- Parallax start -->
  <div class="parallax"></div>
  <!-- Parallax end -->


  <footer class="bg-light text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-4">
      <h3><b style="color: black;">Created By Hakka.</b></h3>
      <p style="margin: 1rem;font-size: 18px;">
        เป็นเว็บไซต์ที่สร้างขึ้นมาเพื่อแบ่งปันความรู้ด้านช่องโหว่และด้านความปลอดภัยทางไซเบอร์
        และเป็นโปรเจ็คจบการศึกษาปีที่ 4 ของพวกผมอีกด้วยครับ</p>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="../assets/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>