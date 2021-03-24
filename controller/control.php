<?php
    include 'log_in/log_in.php';
    $home = $_GET['home'];
    switch($home){
        case "off": {
            if(isset($_SESSION['login']))
                header("Refresh: 0 url=index.php?home=on");
            else
                require_once("./views/admin/login.php");
            break;
        }
        case "on": {
            if(!isset($_SESSION['login'])){
                header("location: index.php?home=off");
            }
            require_once("./views/index.php");
            break;
        }
    }
  
    // else{
    //     header("Refresh: 0 url=index.php?home=off");
    // }
?>