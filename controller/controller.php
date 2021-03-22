<?php
    if(isset($_GET['home'])){
        $control = $_GET['home'];
    }
    else{
        $control = "NO";
    }
    
    $errorText = "";
    $successText = "";
    $checkUser = false;
    switch($control){
        case "noactive": {
            if(isset($_POST['login_submit'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                foreach($DataU as $data){
                    if(in_array($username, $data)){
                        $successText = "Đăng Nhập Thành Công!";
                        $GLOBALS['checkUser'] = true;
                        setcookie("username", $username, time()+(86400*30), "/");
                        setcookie("password", $password, time()+(86400*30), "/");
                        break;
                    }
                    else{
                        continue;
                    }
                }
                if($GLOBALS['checkUser']) header("location: index.php?home=active");
                $errorText = $GLOBALS['checkUser'] ?  "" : "(*) Vui lòng kiểm tra lại tên tài khoản hoặc mật khẩu";
            }
            if(empty($_COOKIE['username']) && empty($_COOKIE['password'])){
            require_once("./views/admin/login.php");
            }
            else {require_once("./views/home.php"); header("location: index.php?home=active");}
            break;
        }
        case "signactive": {
            require_once("./views/admin/signup.php");
            break;
        }
        case "active": {
            if(isset($_POST['logout'])){
                $_COOKIE['username'] = "";
                $_COOKIE['password'] = "";
                setcookie("username", "", time()*0, "/");
                setcookie("password", "", time()*0, "/");
            }
            if(!empty($_COOKIE['username']) && !empty($_COOKIE['password']))
                require_once("./views/home.php");
            else{
                 require_once("./views/admin/login.php");
                //  header("location: index.php?home=noactive");
            }
                break;
        }
        default: {
            require_once("./views/index.php");
            break;
        }
    }
?>

