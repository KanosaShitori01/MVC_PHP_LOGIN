<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Nhân Viên</title>
    <link rel="stylesheet" href="./assets/css_admin/signup.css">
    <link rel="stylesheet" href="./assets/css_admin/login.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <?php
        include './model/DBconfig.php';
        $conn = new Database("root","", "employeemanager");
        $conn->Connection();  
        $DataU = $conn->getAllData("personnel");
        $DataAd = $conn->getAllData("admin");
        // $conn->EndSession();
        // $conn->Execute("DROP TABLE personnel");
        if(!isset($_GET['home'])){
            header("location: index.php?home=off");
        }
        else{
            require_once("./controller/control.php");
        }
    ?>
</body>
<script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
    }   
</script>
</html>
