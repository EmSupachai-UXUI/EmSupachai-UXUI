<?php

class Account{

    public function hashPassword($password){
        $hash1 = hash('ripemd160', $password);
        $hash2 = hash('crc32', $hash1);
        $hash3 = hash('md5', $hash2);
        return $hash3;
    }

    public function Login($username, $pass){
		$user = strtolower($username);
        if(!isset($_SESSON['username'])){
            if(count(query("SELECT * FROM user WHERE username=?", [$user])->fetchAll()) == 1){
                $u = query("SELECT * FROM user WHERE username=?", [$user])->fetch();
                if($u['password'] == $pass){
                    $_SESSION['username'] = $u['username'];
                    $_SESSION['date'] = $u['date'];
                    $_SESSION['email'] = $u['email'];
                    $_SESSION['status'] = $u['group'];
                    return true;
                }else{
                    return false;
                }
            }elseif(count(query("SELECT * FROM user WHERE email=?", [$user])->fetchAll()) == 1){
                $u = query("SELECT * FROM user WHERE email=?", [$user])->fetch();
                if($u['password'] == $pass){
                    $_SESSION['username'] = $u['username'];
                    $_SESSION['date'] = $u['date'];
                    $_SESSION['email'] = $u['email'];
                    $_SESSION['status'] = $u['group'];
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }else{
            return false;
        }
    }


    public function Register($user, $email, $password){
		$username = strtolower($user);
        if($username == "" or $password == "" or $email == ""){
            $_SESSION['register_null'] = true;
            return false;
        }elseif(count(query("SELECT * FROM user WHERE username=?", [$username])->fetchAll()) > 0){
            $_SESSION['register_error_username'] = true;
            return false;
        }elseif(query("INSERT INTO user (username, password, date, email, profile) VALUES (?, ?, ?, ?, ?)", [$username, $this->hashPassword($password), now_time(time()), $email, "profile.png"])){
            $_SESSION['register_success'] = true;
            $this->Login($username, $this->hashPassword($password));
            return true;
        }else{
            $_SESSION['register_error'] = true;
            return false;
        }
    }

    // public function facebookLogin($user, $pass){
    //     if(count(query("SELECT * FROM user WHERE username=?", [$user])->fetchAll()) < 1){
    //         if(query("INSERT INTO user (username, password, topup, credit, date, invite) VALUES (?, ?, ?, ? ,?, ?)", [$user, $this->hashPassword($pass), 0, 0, now_time(time()), $_SESSION['invite']])){
    //             $this->Login($user, $this->hashPassword($pass));
    //             $_SESSION['login_success'] = true;
    //             return true;
    //         }else{
    //             return false;
    //         }
    //     }elseif(count(query("SELECT * FROM user WHERE username=?", [$user])->fetchAll()) > 0){
    //         if($this->Login($user, $this->hashPassword($pass))){
    //             $_SESSION['login_success'] = true;
    //             return true;
    //         }else{
    //             return false;
    //         }
    //     }else{
    //         return false;
    //     }
    // }


    public function getPoint($lesson_id, $username){
        $h = query("SELECT * FROM test_history WHERE username = ?", [$username])->fetchAll();
        $i = 0;
        foreach($h as $l){
            if($l['lesson_id'] == $lesson_id){
                $i += $l['point'];
            }

        }
        return $i;
    }

    public function getUser(){
        $user = $_SESSION['username'];
        $u = query("SELECT * FROM user WHERE username=?", [$user])->fetch();
        return $u;
    }

    public function getAllPoint($username){
        $h = query("SELECT * FROM test_history WHERE username = ?", [$username])->fetchAll();
        $i = 0;
        foreach($h as $l){
            $i += $l['point'];
        }
        return $i;
    }

    public function getTestPoint($lesson_id){
        $h = query("SELECT * FROM test WHERE lesson_id = ?", [$lesson_id])->fetchAll();
        $i = 0;
        foreach($h as $l){
            $i += $l['point'];
        }
        return $i;
    }

    public function addPoint($lesson_id, $test_id, $point, $username){
        if(query("INSERT INTO test_history (username, test_id, lesson_id, point) VALUES (?,?,?,?)", [$username, $test_id, $lesson_id, $point])){
            return true;
        }else{
            return false;
        }
    }

    public function reducePoint($lesson_id, $test_id, $point, $username){
        $p = "-$point";
        if(query("INSERT INTO test_history (username, test_id, lesson_id, point) VALUES (?,?,?,?)", [$username, "-", $lesson_id, $p])){
            
            query("UPDATE user SET `point` = `point` - ? WHERE username=?", [$point ,$username]);
            return true;
        }else{
            return false;
        }
    }

    public function CheckUser(){
        if(isset($_SESSION['username'])){
            $user = $_SESSION['username'];
            if(count(query("SELECT * FROM user WHERE username=?", [$user])->fetchAll()) == 1){
                $u = query("SELECT * FROM user WHERE username=?", [$user])->fetch();
                $_SESSION['username'] = $u['username'];
                $_SESSION['date'] = $u['date'];
                $_SESSION['email'] = $u['email'];
                $_SESSION['status'] = $u['group'];
            }else{
                unset($_SESSION['username']);
                unset($_SESSION['date']);
                unset($_SESSION['email']);
                unset($_SESSION['status']);
            }
        }
    }
}