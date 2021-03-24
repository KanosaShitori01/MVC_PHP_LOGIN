<?php
    include 'log_in/log_in.php';
    include 'log_in/log_out.php';
    $home = $_GET['home'];
    if($home == "off"){
        if(isset($_SESSION['login']))
            header("location: index.php?home=on");
        else
            require_once("./views/admin/login.php");
    }
    // switch($home){
    //     case "off": {
    //         if(isset($_SESSION['login']))
    //             header("location: index.php?home=on");
    //         else
    //             require_once("./views/admin/login.php");
    //         break;
    //     }
    //     case "on": {
    //         if(!isset($_SESSION['login'])){
    //             header("location: index.php?home=off");
    //         }
    //         else
    //         require_once("./views/ls.php");
    //         break;
    //     }
    // }
  
    // else{
    //     header("Refresh: 0 url=index.php?home=off");
    // }
?>