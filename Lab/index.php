<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>!!!!!</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
            .centered {
  position: fixed;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
}
        </style>
    </head>
    <body style="
    background: linear-gradient(320deg, #434343, #000000) no-repeat center center fixed;
    background-size: cover;">
    <?php
        require_once dirname(__FILE__)."/../_system/system.php";
        if(!isset($_SESSION['username'])){
        header("Location: /Login");
        return true;
        }
        if(query("SELECT * FROM test_history WHERE username = ?", [$_SESSION['username']])->rowCount() > 90){
            header("Location: Home/");
            return true;
        }
    ?>
    <div class="centered">
        <a href="/"><img src="card.png"></a>
    </div>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    </body>
</html>