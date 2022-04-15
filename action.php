<?php


require_once dirname(__FILE__)."/_system/system.php";
if($_POST){
    if(isset($_POST['editprofile'])){
        $username = $_POST['username'];
        if(query("SELECT * FROM user WHERE username=?", [$username])->rowCount() > 0 && $username != account()->getUser()['username']){
            $_SESSION['register_error_username'] = true;
            header("Location: /Profile");
            return true;
        }
        if($_FILES['upload']['name'] == ""){
            query("UPDATE user SET username=? WHERE email=?", [$username, $_SESSION['email']]);
            $_SESSION['username'] = $username;
            header("Location: /Profile");
            return true;
        }
        $imgname = rand(100, 999999999999).".jpg";
        $name_file =  $_FILES['upload']['name'];
        $tmp_name =  $_FILES['upload']['tmp_name'];
        $locate_img = "upload/";
        move_uploaded_file($tmp_name,$locate_img.$imgname);
        query("UPDATE user SET profile=?, username=? WHERE email=?", [$imgname, $username, $_SESSION['email']]);
        $_SESSION['username'] = $username;
        header("Location: /Profile");
        return true;
    }
    if(isset($_POST['testing'])){
        $answer = $_POST['answer'];
        if($_POST['answer'] == ""){
            $answer = "5";
        }else{
            $answer = $_POST['answer'];
        }
        $lesson_id = $_POST['lesson_id'];
        $test_id = $_POST['test_id'];
        $test = query("SELECT * FROM test WHERE id = ?", [$test_id])->fetch();
        $test_history = query("SELECT * FROM test_history WHERE username= ? AND test_id = ?", [$_SESSION['username'], $test_id]);
        if($test_history->rowCount() > 0){
            if($answer == $test['answer']){
                $_SESSION['correct'] = 0;
                header("Location: Lesson/Test/?testing=$lesson_id");
                return true;
            }else{
                $_SESSION['incorrect'] = true;
                header("Location: Lesson/Test/?testing=incorrect&lesson=$lesson_id");
                return true;
            }
            return true;
        }
        if($answer == $test['answer']){
            account()->addPoint($lesson_id, $test_id, $test['point'], $_SESSION['username']);
            $_SESSION['correct'] = $test['point'];
            query("UPDATE user SET `point` = `point` + ? WHERE username=?", [$test['point'] ,$_SESSION['username']]);

            $point_1 = 0;
            $point_2 = 0;
            $point_3 = 0;
            $point_4 = 0;
            $point_5 = 0;
            $point_6 = 0;
            $point_7 = 0;
            $point_8 = 0;


            // SKill 1
            $lesson_name = query("SELECT * FROM lesson WHERE id = ?", [$lesson_id])->fetch()['name'];
            $skill_1 = query("SELECT * FROM skill_chart WHERE id = ?", [1])->fetch();
            /** Skill 1 Check Sta-----------rt */ 
            for($i = 1; $i < 9; $i++){
                if($lesson_name == $skill_1['lesson_'.$i]){
                    $point_1 += $skill_1['skill_'.$i];
                }
            }
            query("UPDATE user SET `skill_1` = `skill_1` + ? WHERE username=?", [$point_1 ,$_SESSION['username']]);
            /** Skill 1 End */

            
            // SKill 2
            $lesson_name = query("SELECT * FROM lesson WHERE id = ?", [$lesson_id])->fetch()['name'];
            $skill_2 = query("SELECT * FROM skill_chart WHERE id = ?", [2])->fetch();
            /** Skill 2 Check Sta-----------rt */ 
            for($a = 1; $a < 9; $a++){
                if($lesson_name == $skill_2['lesson_'.$a]){
                    $point_2 += $skill_2['skill_'.$a];
                }
            }
            query("UPDATE user SET `skill_2` = `skill_2` + ? WHERE username=?", [$point_2 ,$_SESSION['username']]);
            /** Skill 2 End */


            // SKill 3
            $lesson_name = query("SELECT * FROM lesson WHERE id = ?", [$lesson_id])->fetch()['name'];
            $skill_3 = query("SELECT * FROM skill_chart WHERE id = ?", [3])->fetch();
            /** Skill 3 Check Sta-----------rt */ 
            for($b = 1; $b < 9; $b++){
                if($lesson_name == $skill_3['lesson_'.$b]){
                    $point_3 += $skill_3['skill_'.$b];
                }
            }
            query("UPDATE user SET `skill_3` = `skill_3` + ? WHERE username=?", [$point_3 ,$_SESSION['username']]);
            /** Skill 3 End */


            // SKill 4
            $lesson_name = query("SELECT * FROM lesson WHERE id = ?", [$lesson_id])->fetch()['name'];
            $skill_4 = query("SELECT * FROM skill_chart WHERE id = ?", [4])->fetch();
            /** Skill 4 Check Sta-----------rt */ 
            for($c = 1; $c < 9; $c++){
                if($lesson_name == $skill_4['lesson_'.$c]){
                    $point_4 += $skill_4['skill_'.$c];
                }
            }
            query("UPDATE user SET `skill_4` = `skill_4` + ? WHERE username=?", [$point_4 ,$_SESSION['username']]);
            /** Skill 4 End */


            // SKill 5
            $lesson_name = query("SELECT * FROM lesson WHERE id = ?", [$lesson_id])->fetch()['name'];
            $skill_5 = query("SELECT * FROM skill_chart WHERE id = ?", [5])->fetch();
            /** Skill 5 Check Sta-----------rt */ 
            for($d = 1; $d < 9; $d++){
                if($lesson_name == $skill_5['lesson_'.$d]){
                    $point_5 += $skill_5['skill_'.$d];
                }
            }
            query("UPDATE user SET `skill_5` = `skill_5` + ? WHERE username=?", [$point_5 ,$_SESSION['username']]);
            /** Skill 5 End */


            // SKill 6
            $lesson_name = query("SELECT * FROM lesson WHERE id = ?", [$lesson_id])->fetch()['name'];
            $skill_6 = query("SELECT * FROM skill_chart WHERE id = ?", [6])->fetch();
            /** Skill 6 Check Sta-----------rt */ 
            for($e = 1; $e < 9; $e++){
                if($lesson_name == $skill_6['lesson_'.$e]){
                    $point_6 += $skill_6['skill_'.$e];
                }
            }
            query("UPDATE user SET `skill_6` = `skill_6` + ? WHERE username=?", [$point_6 ,$_SESSION['username']]);
            /** Skill 6 End */


            // SKill 7
            $lesson_name = query("SELECT * FROM lesson WHERE id = ?", [$lesson_id])->fetch()['name'];
            $skill_7 = query("SELECT * FROM skill_chart WHERE id = ?", [7])->fetch();
            /** Skill 7 Check Sta-----------rt */ 
            for($f = 1; $f < 9; $f++){
                if($lesson_name == $skill_7['lesson_'.$f]){
                    $point_7 += $skill_7['skill_'.$f];
                }
            }
            query("UPDATE user SET `skill_7` = `skill_7` + ? WHERE username=?", [$point_7 ,$_SESSION['username']]);
            /** Skill 7 End */


            // SKill 8
            $lesson_name = query("SELECT * FROM lesson WHERE id = ?", [$lesson_id])->fetch()['name'];
            $skill_8 = query("SELECT * FROM skill_chart WHERE id = ?", [8])->fetch();
            /** Skill 8 Check Sta-----------rt */ 
            for($g = 1; $g < 9; $g++){
                if($lesson_name == $skill_8['lesson_'.$g]){
                    $point_8 += $skill_8['skill_'.$g];
                }
            }
            query("UPDATE user SET `skill_8` = `skill_8` + ? WHERE username=?", [$point_8 ,$_SESSION['username']]);
            /** Skill 8 End */



            header("Location: Lesson/Test/?testlist=$lesson_id");
            return true;
        }else{
            $_SESSION['incorrect'] = true;
            header("Location: Lesson/Test/?testing=incorrect&lesson=$lesson_id");
            return true;
        }
    }
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(account()->Login($username, account()->hashPassword($password))){
            $_SESSION['login_success'] = true;
            header("Location: Home/");
        }else{
            $_SESSION['login_error'] = true;;
            header("Location: Login/");
        }
    }elseif(isset($_POST['register'])){
    //     if($_POST['g-recaptcha-response'] == ""){
    //         $_SESSION['captcha_error'] = true;
    //         $_SESSION['captcha_error'] = true;
    //         header("Location: /");
    //         return true;
    //     }
    // $secret = '6LeV8aYbAAAAANERbvpjuS03JILO6v-XHy5jpQdc';
    // $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    // $responseData = json_decode($verifyResponse);
    // if ($responseData->success) {
    //     $username = $_POST['username'];
    //     $password = $_POST['password'];
    //     $repass = $_POST['repass'];
    //     if(account()->Register($username, $password, $repass)){
    //         header("Location: /");
    //     }else{
    //         header("Location: /");
    //     }
    // }else{
    //     header("Location: /");
    // }
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(account()->Register($username, $email, $password)){
        header("Location: /Home");
    }else{
        header("Location: /Register");
    }
    }elseif($_POST['action'] == "resetpassword"){
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
            header("Location: ./?page=changepassword");
        }else{
            $_SESSION['reset4'] = true;
            header("Location: ./?page=changepassword");
        }
    }else{
        header("Location: /?page=register");
    }
}elseif($_GET){
    if(isset($_GET['logout'])){
        unset($_SESSION['username']);
        unset($_SESSION['date']);
        unset($_SESSION['email']);
        $_SESSION['logout'] = true;
        header("Location: /");
    }else{
        header("Location: /");
    }
}else{
    header("Location: /");
}