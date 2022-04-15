<?php 
// REQUIRE DB CONFIG
require_once dirname(__FILE__)."/dbconfig.php";
date_default_timezone_set('Asia/Bangkok');
session_start();


// Connect DATABASE
try{
    $main = (object) array(
        'sql' => new PDO("mysql:host=$dbhost;dbname=$dbname;charset=UTF8", $dbuser, $dbpass)
    );
}catch(PDOException $e){
    die($e->getMessage());
}

require_once("setting.php");
require_once("account.php");
// QUERY PDO MySQL
function query($sql, $array=array()){
    global $main;
    $resualt = $main->sql->prepare($sql);
    $resualt->execute($array);
    return $resualt;
}

$title = query("SELECT * FROM setting_prehome WHERE id=?", [1])->fetch()['text1'];
$description = query("SELECT * FROM setting_prehome WHERE id=?", [1])->fetch()['text3'];

// Account Class
function account(){
    $account = new Account();
    return $account;
}

// Time Function
function now_time($time){
    $thai_date_return = date("j",$time);
    $thai_date_return.="/".date("n",$time);
    $thai_date_return.= "/".(date("Y",$time));
    $thai_date_return.= " ".date("H:i:s",$time)."น.";
    return $thai_date_return;
}

// DATE FUNCTION
$dayTH = ['อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์'];
$monthTH = [null,'มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'];
function thai_date_and_time($time){
    global $dayTH,$monthTH;
    $thai_date_return = date("j",$time);
    $thai_date_return.=" ".$monthTH[date("n",$time)];
    $thai_date_return.= " ".(date("Y",$time)+543);
    $thai_date_return.= " เวลา ".date("H:i:s",$time);
    return $thai_date_return;
}

account()->CheckUser();