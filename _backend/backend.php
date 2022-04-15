<?php 
require_once dirname(__FILE__)."/../_system/system.php";
if(isset($_SESSION['username']) and strtolower(query("SELECT * FROM user WHERE username=?", [$_SESSION['username']])->fetch()['group']) != "admin"){
    header("Location: ../");
}
if(!isset($_SESSION['username'])){
    header("Location: ../");
}