<?php
require_once dirname(__FILE__)."/../backend.php";

if($_POST){
    if(isset($_POST['saveskill'])){
        switch($_POST['saveskill']){
            case "1":
                $skill_name = $_POST['skill_name'];
                $select_1 = $_POST['select_1'];
                $select_2 = $_POST['select_2'];
                $select_3 = $_POST['select_3'];
                $select_4 = $_POST['select_4'];
                $select_5 = $_POST['select_5'];
                $select_6 = $_POST['select_6'];
                $select_7 = $_POST['select_7'];
                $select_8 = $_POST['select_8'];
                $point_1 = $_POST['point_1'];
                $point_2 = $_POST['point_2'];
                $point_3 = $_POST['point_3'];
                $point_4 = $_POST['point_4'];
                $point_5 = $_POST['point_5'];
                $point_6 = $_POST['point_6'];
                $point_7 = $_POST['point_7'];
                $point_8 = $_POST['point_8'];
                
                if(is_numeric($point_1) and is_numeric($point_2) and is_numeric($point_3) and is_numeric($point_4) and is_numeric($point_5) and is_numeric($point_6) and is_numeric($point_7) and is_numeric($point_8)){
                    query("UPDATE skill_chart SET 
                name=?, lesson_1 = ?, lesson_2 = ?, lesson_3 = ?, lesson_4 = ?, lesson_5 = ?, lesson_6 = ?, lesson_7 = ?, lesson_8 = ?, 
                skill_1 = ?, skill_2 = ?, skill_3 = ?, skill_4 = ?, skill_5 = ?, skill_6 = ?, skill_7 = ?, skill_8 = ? WHERE id = ?", 
                [$skill_name,$select_1,$select_2,$select_3,$select_4,$select_5,$select_6,$select_7,$select_8,
                $point_1,$point_2,$point_3,$point_4,$point_5,$point_6,$point_7,$point_8,
                1]);
                
                }
                break;
                case "2":
                    $skill_name = $_POST['skill_name'];
                    $select_1 = $_POST['select_1'];
                    $select_2 = $_POST['select_2'];
                    $select_3 = $_POST['select_3'];
                    $select_4 = $_POST['select_4'];
                    $select_5 = $_POST['select_5'];
                    $select_6 = $_POST['select_6'];
                    $select_7 = $_POST['select_7'];
                    $select_8 = $_POST['select_8'];
                    $point_1 = $_POST['point_1'];
                    $point_2 = $_POST['point_2'];
                    $point_3 = $_POST['point_3'];
                    $point_4 = $_POST['point_4'];
                    $point_5 = $_POST['point_5'];
                    $point_6 = $_POST['point_6'];
                    $point_7 = $_POST['point_7'];
                    $point_8 = $_POST['point_8'];
                    //print_r($_POST);
                    
                
                if(is_numeric($point_1) and is_numeric($point_2) and is_numeric($point_3) and is_numeric($point_4) and is_numeric($point_5) and is_numeric($point_6) and is_numeric($point_7) and is_numeric($point_8)){
                    
                
                    query("UPDATE skill_chart SET 
                    name=?, lesson_1 = ?, lesson_2 = ?, lesson_3 = ?, lesson_4 = ?, lesson_5 = ?, lesson_6 = ?, lesson_7 = ?, lesson_8 = ?, 
                    skill_1 = ?, skill_2 = ?, skill_3 = ?, skill_4 = ?, skill_5 = ?, skill_6 = ?, skill_7 = ?, skill_8 = ? WHERE id = ?", 
                    [$skill_name,$select_1,$select_2,$select_3,$select_4,$select_5,$select_6,$select_7,$select_8,
                    $point_1,$point_2,$point_3,$point_4,$point_5,$point_6,$point_7,$point_8,
                    2]);
                }
                    break;
                    case "3":
                        $skill_name = $_POST['skill_name'];
                        $select_1 = $_POST['select_1'];
                        $select_2 = $_POST['select_2'];
                        $select_3 = $_POST['select_3'];
                        $select_4 = $_POST['select_4'];
                        $select_5 = $_POST['select_5'];
                        $select_6 = $_POST['select_6'];
                        $select_7 = $_POST['select_7'];
                        $select_8 = $_POST['select_8'];
                        $point_1 = $_POST['point_1'];
                        $point_2 = $_POST['point_2'];
                        $point_3 = $_POST['point_3'];
                        $point_4 = $_POST['point_4'];
                        $point_5 = $_POST['point_5'];
                        $point_6 = $_POST['point_6'];
                        $point_7 = $_POST['point_7'];
                        $point_8 = $_POST['point_8'];
                        //print_r($_POST);
                
                if(is_numeric($point_1) and is_numeric($point_2) and is_numeric($point_3) and is_numeric($point_4) and is_numeric($point_5) and is_numeric($point_6) and is_numeric($point_7) and is_numeric($point_8)){
                    
                    query("UPDATE skill_chart SET 
                    name=?, lesson_1 = ?, lesson_2 = ?, lesson_3 = ?, lesson_4 = ?, lesson_5 = ?, lesson_6 = ?, lesson_7 = ?, lesson_8 = ?, 
                    skill_1 = ?, skill_2 = ?, skill_3 = ?, skill_4 = ?, skill_5 = ?, skill_6 = ?, skill_7 = ?, skill_8 = ? WHERE id = ?", 
                    [$skill_name,$select_1,$select_2,$select_3,$select_4,$select_5,$select_6,$select_7,$select_8,
                    $point_1,$point_2,$point_3,$point_4,$point_5,$point_6,$point_7,$point_8,
                    3]);
                
                }
                        break;
                        case "4":
                            $skill_name = $_POST['skill_name'];
                            $select_1 = $_POST['select_1'];
                            $select_2 = $_POST['select_2'];
                            $select_3 = $_POST['select_3'];
                            $select_4 = $_POST['select_4'];
                            $select_5 = $_POST['select_5'];
                            $select_6 = $_POST['select_6'];
                            $select_7 = $_POST['select_7'];
                            $select_8 = $_POST['select_8'];
                            $point_1 = $_POST['point_1'];
                            $point_2 = $_POST['point_2'];
                            $point_3 = $_POST['point_3'];
                            $point_4 = $_POST['point_4'];
                            $point_5 = $_POST['point_5'];
                            $point_6 = $_POST['point_6'];
                            $point_7 = $_POST['point_7'];
                            $point_8 = $_POST['point_8'];
                            //print_r($_POST);
                
                if(is_numeric($point_1) and is_numeric($point_2) and is_numeric($point_3) and is_numeric($point_4) and is_numeric($point_5) and is_numeric($point_6) and is_numeric($point_7) and is_numeric($point_8)){
                    
                    query("UPDATE skill_chart SET 
                    name=?, lesson_1 = ?, lesson_2 = ?, lesson_3 = ?, lesson_4 = ?, lesson_5 = ?, lesson_6 = ?, lesson_7 = ?, lesson_8 = ?, 
                    skill_1 = ?, skill_2 = ?, skill_3 = ?, skill_4 = ?, skill_5 = ?, skill_6 = ?, skill_7 = ?, skill_8 = ? WHERE id = ?", 
                    [$skill_name,$select_1,$select_2,$select_3,$select_4,$select_5,$select_6,$select_7,$select_8,
                    $point_1,$point_2,$point_3,$point_4,$point_5,$point_6,$point_7,$point_8,
                    4]);
                
                }
                            break;
                            case "5":
                                $skill_name = $_POST['skill_name'];
                                $select_1 = $_POST['select_1'];
                                $select_2 = $_POST['select_2'];
                                $select_3 = $_POST['select_3'];
                                $select_4 = $_POST['select_4'];
                                $select_5 = $_POST['select_5'];
                                $select_6 = $_POST['select_6'];
                                $select_7 = $_POST['select_7'];
                                $select_8 = $_POST['select_8'];
                                $point_1 = $_POST['point_1'];
                                $point_2 = $_POST['point_2'];
                                $point_3 = $_POST['point_3'];
                                $point_4 = $_POST['point_4'];
                                $point_5 = $_POST['point_5'];
                                $point_6 = $_POST['point_6'];
                                $point_7 = $_POST['point_7'];
                                $point_8 = $_POST['point_8'];
                                //print_r($_POST);
                
                if(is_numeric($point_1) and is_numeric($point_2) and is_numeric($point_3) and is_numeric($point_4) and is_numeric($point_5) and is_numeric($point_6) and is_numeric($point_7) and is_numeric($point_8)){
                    
                
                    query("UPDATE skill_chart SET 
                    name=?, lesson_1 = ?, lesson_2 = ?, lesson_3 = ?, lesson_4 = ?, lesson_5 = ?, lesson_6 = ?, lesson_7 = ?, lesson_8 = ?, 
                    skill_1 = ?, skill_2 = ?, skill_3 = ?, skill_4 = ?, skill_5 = ?, skill_6 = ?, skill_7 = ?, skill_8 = ? WHERE id = ?", 
                    [$skill_name,$select_1,$select_2,$select_3,$select_4,$select_5,$select_6,$select_7,$select_8,
                    $point_1,$point_2,$point_3,$point_4,$point_5,$point_6,$point_7,$point_8,
                    5]);
                }
                                break;
                                case "6":
                                    $skill_name = $_POST['skill_name'];
                                    $select_1 = $_POST['select_1'];
                                    $select_2 = $_POST['select_2'];
                                    $select_3 = $_POST['select_3'];
                                    $select_4 = $_POST['select_4'];
                                    $select_5 = $_POST['select_5'];
                                    $select_6 = $_POST['select_6'];
                                    $select_7 = $_POST['select_7'];
                                    $select_8 = $_POST['select_8'];
                                    $point_1 = $_POST['point_1'];
                                    $point_2 = $_POST['point_2'];
                                    $point_3 = $_POST['point_3'];
                                    $point_4 = $_POST['point_4'];
                                    $point_5 = $_POST['point_5'];
                                    $point_6 = $_POST['point_6'];
                                    $point_7 = $_POST['point_7'];
                                    $point_8 = $_POST['point_8'];
                                    //print_r($_POST);
                
                if(is_numeric($point_1) and is_numeric($point_2) and is_numeric($point_3) and is_numeric($point_4) and is_numeric($point_5) and is_numeric($point_6) and is_numeric($point_7) and is_numeric($point_8)){
                    
                
                    query("UPDATE skill_chart SET 
                    name=?, lesson_1 = ?, lesson_2 = ?, lesson_3 = ?, lesson_4 = ?, lesson_5 = ?, lesson_6 = ?, lesson_7 = ?, lesson_8 = ?, 
                    skill_1 = ?, skill_2 = ?, skill_3 = ?, skill_4 = ?, skill_5 = ?, skill_6 = ?, skill_7 = ?, skill_8 = ? WHERE id = ?", 
                    [$skill_name,$select_1,$select_2,$select_3,$select_4,$select_5,$select_6,$select_7,$select_8,
                    $point_1,$point_2,$point_3,$point_4,$point_5,$point_6,$point_7,$point_8,
                    6]);
                }
                                    break;
                                    case "7":
                                        $skill_name = $_POST['skill_name'];
                                        $select_1 = $_POST['select_1'];
                                        $select_2 = $_POST['select_2'];
                                        $select_3 = $_POST['select_3'];
                                        $select_4 = $_POST['select_4'];
                                        $select_5 = $_POST['select_5'];
                                        $select_6 = $_POST['select_6'];
                                        $select_7 = $_POST['select_7'];
                                        $select_8 = $_POST['select_8'];
                                        $point_1 = $_POST['point_1'];
                                        $point_2 = $_POST['point_2'];
                                        $point_3 = $_POST['point_3'];
                                        $point_4 = $_POST['point_4'];
                                        $point_5 = $_POST['point_5'];
                                        $point_6 = $_POST['point_6'];
                                        $point_7 = $_POST['point_7'];
                                        $point_8 = $_POST['point_8'];
                                        //print_r($_POST);
                
                if(is_numeric($point_1) and is_numeric($point_2) and is_numeric($point_3) and is_numeric($point_4) and is_numeric($point_5) and is_numeric($point_6) and is_numeric($point_7) and is_numeric($point_8)){
                    
                
                    query("UPDATE skill_chart SET 
                    name=?, lesson_1 = ?, lesson_2 = ?, lesson_3 = ?, lesson_4 = ?, lesson_5 = ?, lesson_6 = ?, lesson_7 = ?, lesson_8 = ?, 
                    skill_1 = ?, skill_2 = ?, skill_3 = ?, skill_4 = ?, skill_5 = ?, skill_6 = ?, skill_7 = ?, skill_8 = ? WHERE id = ?", 
                    [$skill_name,$select_1,$select_2,$select_3,$select_4,$select_5,$select_6,$select_7,$select_8,
                    $point_1,$point_2,$point_3,$point_4,$point_5,$point_6,$point_7,$point_8,
                    7]);
                }
                                        break;
                                        case "8":
                                            $skill_name = $_POST['skill_name'];
                                            $select_1 = $_POST['select_1'];
                                            $select_2 = $_POST['select_2'];
                                            $select_3 = $_POST['select_3'];
                                            $select_4 = $_POST['select_4'];
                                            $select_5 = $_POST['select_5'];
                                            $select_6 = $_POST['select_6'];
                                            $select_7 = $_POST['select_7'];
                                            $select_8 = $_POST['select_8'];
                                            $point_1 = $_POST['point_1'];
                                            $point_2 = $_POST['point_2'];
                                            $point_3 = $_POST['point_3'];
                                            $point_4 = $_POST['point_4'];
                                            $point_5 = $_POST['point_5'];
                                            $point_6 = $_POST['point_6'];
                                            $point_7 = $_POST['point_7'];
                                            $point_8 = $_POST['point_8'];
                                            //print_r($_POST);
                
                if(is_numeric($point_1) and is_numeric($point_2) and is_numeric($point_3) and is_numeric($point_4) and is_numeric($point_5) and is_numeric($point_6) and is_numeric($point_7) and is_numeric($point_8)){
                    
                    query("UPDATE skill_chart SET 
                    name=?, lesson_1 = ?, lesson_2 = ?, lesson_3 = ?, lesson_4 = ?, lesson_5 = ?, lesson_6 = ?, lesson_7 = ?, lesson_8 = ?, 
                    skill_1 = ?, skill_2 = ?, skill_3 = ?, skill_4 = ?, skill_5 = ?, skill_6 = ?, skill_7 = ?, skill_8 = ? WHERE id = ?", 
                    [$skill_name,$select_1,$select_2,$select_3,$select_4,$select_5,$select_6,$select_7,$select_8,
                    $point_1,$point_2,$point_3,$point_4,$point_5,$point_6,$point_7,$point_8,
                    8]);
                
                }
                                            break;
        }
        header("Location: ../skillmanager.php");
    }
    if(isset($_POST['action'])){
        switch($_POST['action']){
            case "savehome":
                $details = $_POST['details'];
                $button = $_POST['button'];
                query("UPDATE setting_home SET details = ?, button = ? WHERE id=?", [$details, $button, 1]);
                header("Location: ../");
                break;
                case "saveprehome":
                    $text1 = $_POST['text1'];
                    $text2 = $_POST['text2'];
                    $text3 = $_POST['text3'];
                    query("UPDATE setting_prehome SET text1 = ?, text2 = ?, text3 = ? WHERE id=?", [$text1, $text2, $text3, 1]);
                    header("Location: ../");
                    break;
                    case "saverank":
                        $silver = $_POST['silver'];
                        $gold = $_POST['gold'];
                        $hacker = $_POST['hacker'];
                        query("UPDATE setting_rank SET silver = ?, gold = ?, hacker = ? WHERE id=?", [$silver, $gold, $hacker, 1]);
                        header("Location: ../rank.php");
                        break;
                        case "imgupload":
                            //$imgname = rand(100000, 999999).".jpg";
                            $name_file =  $_FILES['upload']['name'];
                            $tmp_name =  $_FILES['upload']['tmp_name'];
                            $locate_img = "../../upload/";
                            move_uploaded_file($tmp_name,$locate_img.$name_file);
                            query("INSERT INTO upload (upload) VALUES (?)", [$name_file]);
                            header("Location: ../upload.php");
                            break;
                            case "addlesson":
                                $vip = "false";
                                if(isset($_POST['vip'])){
                                    $vip = "true";
                                }
                                query("INSERT INTO lesson (name, description, img, vip, button, html) VALUES (?,?,?,?,?,?)", [$_POST['lesson'], $_POST['description'], $_POST['link'], $vip, "", ""]);
                                header("Location: ../lesson.php");
                                break;
                                    case "savecontent":
                                        query("UPDATE lesson SET html = ? WHERE id=?", [$_POST['content'], $_POST['id']]);
                                        header("Location: ../content.php?id=".$_POST['id']);
                                    break;
                                    case "updatelesson":
                                        $vip = "false";
                                        if(isset($_POST['vip'])){
                                            $vip = "true";
                                        }
                                        query("UPDATE lesson SET name=?, description=?, img=?, vip=? WHERE id=?", [$_POST['name'], $_POST['description'], $_POST['img'], $vip, $_POST['id']]);
                                        header("Location: ../content.php?id=".$_POST['id']);
                                    break;
                                    case "updatebuttoncontent":
                                        query("UPDATE lesson SET button = ? WHERE id=?", [$_POST['button'], $_POST['id']]);
                                        header("Location: ../content.php?id=".$_POST['id']);
                                        break;
                                        case "addquestion":
                                            
                                        $hide = "false";
                                        if(isset($_POST['hide'])){
                                            $hide = "true";
                                        }
                                            query("INSERT INTO test (point, html, choice_1, choice_2, choice_3, choice_4, answer, lesson_id, hide) VALUES (?,?,?,?,?,?,?,?,?)", 
                                            [$_POST['point'], $_POST['html'], $_POST['choice_1'], $_POST['choice_2'], $_POST['choice_3'], $_POST['choice_4'], $_POST['answer'], $_POST['id'], $hide]);
                                            header("Location: ../test.php?id=".$_POST['id']);
                                            break;
                                            case "editquestion":
                                            
                                                $hide = "false";
                                                if(isset($_POST['hide'])){
                                                    $hide = "true";
                                                }
                                                query("UPDATE test SET point = ?, html = ?, choice_1 = ?, choice_2 = ?, choice_3 = ?, choice_4 = ?, answer = ?, lesson_id = ?, hide=? WHERE id=?", 
                                                [$_POST['point'], $_POST['html'], $_POST['choice_1'], $_POST['choice_2'], $_POST['choice_3'], $_POST['choice_4'], $_POST['answer'], $_POST['lesson_id'], $hide, $_POST['id']]);
                                                header("Location: ../preview.php?id=".$_POST['id']."&page=".$_POST['lesson_id']);
                                                break;
        }
    }
    if(isset($_POST['searchuser'])){
        $username = $_POST['searchuser'];
        if($username == "admin"){
            header("Location: ../usermanager.php");
            return true;
        }
        if(query("SELECT * FROM user WHERE username=?", [$username])->rowCount() > 0){
            $_SESSION['edituser'] = query("SELECT * FROM user WHERE username=?", [$username])->fetch();
            header("Location: ../usermanager.php");
        }elseif(query("SELECT * FROM user WHERE email=?", [$username])->rowCount() > 0){
            $_SESSION['edituser'] = query("SELECT * FROM user WHERE email=?", [$username])->fetch();
            header("Location: ../usermanager.php");
        }else{
            header("Location: ../usermanager.php");
        }
    }
    if(isset($_POST['edituser'])){
        $id = $_POST['edituser'];
        query("UPDATE user SET `group`=?, `point`=? WHERE `id`=?", [$_POST['group'], $_POST['point'], $id]);
        header("Location: ../usermanager.php");
    }
}

if($_GET){
    if(isset($_GET['action'])){
        switch($_GET['action']){
            case "deleteimg":
                query("DELETE FROM upload WHERE id=?", [$_GET['id']]);
                header("Location: ../upload.php");
                break;
                case "deletetest":
                    query("DELETE FROM test WHERE id=?", [$_GET['id']]);
                    header("Location: ../test.php?id=".$_GET['page']);
                    break;
                    case "deletecontent":
                        query("DELETE FROM test WHERE lesson_id=?", [$_GET['id']]);
                        query("DELETE FROM lesson WHERE id=?", [$_GET['id']]);
                        header("Location: ../lesson.php");
                        break;
        }
    }
}
