<?php

require_once dirname(__FILE__)."/../_system/system.php";

if($_POST){
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        $password = account()->hashPassword($_POST['password']);
        if($password == account()->getUser()['password']){
            query("UPDATE user SET email=? WHERE username=?", [$email, $_SESSION['username']]);
            $_SESSION['email'] = $email;
            header("Location: ./");
        }else{
            $_SESSION['error_password'] = true;;
            header("Location: ./");
        }
    }
    if(isset($_POST['resetpassword'])){
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];
        $pass3 = $_POST['pass3'];
        $user = query("SELECT * FROM user WHERE username=?", [$_SESSION['username']])->fetch();
        if(account()->hashPassword($pass1) != $user['password']){
            $_SESSION['reset1'] = true;
            header("Location: ./?page=changepassword");
            return true;
        }
        if($pass2 != $pass3){
            $_SESSION['reset2'] = true;
            header("Location: ./?page=changepassword");
            return true;
        }
        if(query("UPDATE user SET password=? WHERE username=?", [account()->hashPassword($pass3), $_SESSION['username']])){
            $_SESSION['reset3'] = true;
            header("Location: ./");
        }else{
            $_SESSION['reset4'] = true;
            header("Location: ./?page=changepassword");
            
        }
    }
}