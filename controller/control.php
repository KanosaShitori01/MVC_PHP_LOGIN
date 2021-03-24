<?php
    include('log_in/log_in.php');
    if(isset($_GET['home'])){
        $home = $_GET['home'];
    }
    switch($home){
        case "login": {
            if(isset($_POST['login_submit'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                header("Refresh: 0; url=index.php");
                Login($username, $password);
            }
            require_once("./views/admin/login.php");
            break;
        }
        default: {
            require_once("./views/index.php");
           break;
        }
    }
?>