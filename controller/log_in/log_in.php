<?php
    $alertText = "";
    $AlertText = function($status){
        switch($status){
            case "success-login": {
                return "Đăng Nhập Thành Công";
                break;
            }
            case "success-registered": {
                return "Đăng Ký Thành Công";
                break;
            }
            case "error-login": {
                return "Đăng Nhập Thất Bại";
                break;
            }
            case "error-login__username": {
                return "Tên tài khoản không chính xác";
                break;
            }
            case "error-login__password": {
                return "Mật khẩu không chính xác";
                break;
            }
            case "error-registered__username": {
                return "Tên tài khoản đã tồn tại";
                break;
            }
            case "error-registered__password": {
                return "Mật khẩu nhập lại không trùng khớp";
                break;
            }
            case "error-registered__membershipcode": {
                return "Mã nhân viên đã tồn tại";
                break; 
            }
            default: {
                return "";
                break;
            }
        }
    };

    function Login($username, $password, $conn){
        $CheckName = $conn->SearchData("personnel", "tentaikhoan", "\"$username\"");
        $CheckPass = $conn->SearchData("personnel", "matkhau", "\"$password\"");
        if($CheckName && $CheckPass){
            $id = $CheckName[0]['id'];
            $session = $conn->StartSession("personnel", $id, "tentaikhoan");
        }  
        else{
            return false;
        }
        return $session;
    }
    
    if(isset($_POST['login_submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
       
        $checkLG = Login($username, $password, $conn);
        if($checkLG != "")
            $_SESSION['login'] = $checkLG;
    }
    if(isset($_SESSION['login'])){
        // $DataUser = $conn->GetData("personnel");
        $DataUser = $conn->SearchData("personnel", "tentaikhoan", "\"{$_SESSION['login']}\"")[0];
        require_once("./views/index.php");
    }
    else require_once("./views/admin/login.php");
?>