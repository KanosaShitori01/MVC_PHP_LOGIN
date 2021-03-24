<?php
    function LogOut($conn){
        $conn->EndSession();
        header("Refresh: 0 url=index.php?home=off");
    }
    if($_GET['home'] == "logout"){
        LogOut($conn);
    }
?>