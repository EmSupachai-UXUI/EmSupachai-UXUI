<?php
require_once dirname(__FILE__)."/_system/system.php";
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Web title -->
  <title>Hakka</title>



  <!-- FONT -->

  <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
<style>
body {
    
    background: #000000;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #434343, #000000);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to left, #434343, #000000);
}

.center{
display: flex;
justify-content: center;
  align-items: center;
  height: 800px;
}


 
 .fade-in {
	animation: fade-in 3s cubic-bezier(0.390, 0.575, 0.565, 1.000) alternate backwards;
}

 @keyframes fade-in {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

.puff-out-center {
	animation: puff-out-center 1s cubic-bezier(0.165, 0.840, 0.440, 1.000) both;
}
/* ----------------------------------------------
 * Generated by Animista on 2022-3-27 18:33:31
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info. 
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

/**
 * ----------------------------------------
 * animation puff-out-center
 * ----------------------------------------
 */
 @keyframes puff-out-center {
  0% {
    transform: scale(1);
    filter: blur(0px);
    opacity: 1;
  }
  100% {
    transform: scale(2);
    filter: blur(4px);
    opacity: 0;
  }
}

.slide-out-fwd-center {
	animation: slide-out-fwd-center 0.7s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
}
/* ----------------------------------------------
 * Generated by Animista on 2022-3-27 18:36:33
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info. 
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

/**
 * ----------------------------------------
 * animation slide-out-fwd-center
 * ----------------------------------------
 */
 @keyframes slide-out-fwd-center {
  0% {
    transform: translateZ(1);
    opacity: 1;
  }
  100% {
    transform: translateZ(600px);
    opacity: 0;
  }
}

.scale-out-center {
	animation: scale-out-center 0.5s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
}
/* ----------------------------------------------
 * Generated by Animista on 2022-3-27 18:38:29
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info. 
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

/**
 * ----------------------------------------
 * animation scale-out-center
 * ----------------------------------------
 */
 @keyframes scale-out-center {
  0% {
    transform: scale(1);
    opacity: 1;
  }
  100% {
    transform: scale(0);
    opacity: 1;
  }
}

/* The Loader */
#loader-wrapper {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 10;
  overflow: hidden;
}
.no-js #loader-wrapper {
  display: none;
}

#loader {
  display: block;
  position: relative;
  left: 50%;
  top: 50%;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border-radius: 50%;
  border: 3px solid transparent;
  border-top-color: #16a085;
  -webkit-animation: spin 1.7s linear infinite;
          animation: spin 1.7s linear infinite;
  z-index: 11;
}
#loader:before {
  content: "";
  position: absolute;
  top: 5px;
  left: 5px;
  right: 5px;
  bottom: 5px;
  border-radius: 50%;
  border: 3px solid transparent;
  border-top-color: #e74c3c;
  -webkit-animation: spin-reverse 0.6s linear infinite;
          animation: spin-reverse 0.6s linear infinite;
}
#loader:after {
  content: "";
  position: absolute;
  top: 15px;
  left: 15px;
  right: 15px;
  bottom: 15px;
  border-radius: 50%;
  border: 3px solid transparent;
  border-top-color: #f9c922;
  -webkit-animation: spin 1s linear infinite;
          animation: spin 1s linear infinite;
}

@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
  }
}
@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@-webkit-keyframes spin-reverse {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(-360deg);
  }
}
@keyframes spin-reverse {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(-360deg);
  }
}
#loader-wrapper .loader-section {
  position: fixed;
  top: 0;
  width: 51%;
  height: 100%;
  background: #222;
  z-index: 10;
}

#loader-wrapper .loader-section.section-left {
  left: 0;
}

#loader-wrapper .loader-section.section-right {
  right: 0;
}

/* Loaded styles */
.loaded #loader-wrapper .loader-section.section-left {
  transform: translateX(-100%);
  transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
}

.loaded #loader-wrapper .loader-section.section-right {
  transform: translateX(100%);
  transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
}

.loaded #loader {
  opacity: 0;
  transition: all 0.3s ease-out;
}

.loaded #loader-wrapper {
  visibility: hidden;
  transform: translateY(-100%);
  transition: all 0.3s 1s ease-out;
}
</style>

<script>
    let check1 = 0;
    var change1 = setInterval(f1, 4000);
    
    function f1(){
        document.getElementById("logo").classList.remove("fade-in");
            document.getElementById("logo").classList.add("scale-out-center");
            check1 = 1;
            if(check1 != 0){
                clearInterval(change1);
            }
    }
    setInterval(function(){
      <?php
        if(isset($_SESSION['username'])){
          echo 'location.href = "/Home";';
        }else{
          echo 'location.href = "/Login";';
        }
        ?>
        
    }, 5000);

    $(document).ready(function() {
 
   setTimeout(function() {
       $('body').addClass('loaded');
   }, 1000);

});
</script>
<div id="loader-wrapper">
    <div id="loader"></div>
    
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
    
  </div>
<div class="center">
    <img id="logo" width="50%" class="fade-in" src="public/img/home/hakka.png">

</div>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="assets/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>