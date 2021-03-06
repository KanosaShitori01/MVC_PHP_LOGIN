<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/76ee6cfa25.js" crossorigin="anonymous"></script>
    <title>Admin Login</title>
</head>
<style>
    .form_i{
        display: flex;
        align-items: center;
    }
</style>
<body>
    <div class="row-container">
        <nav>
            <div class="logo"><h1>Admin <?php
                    echo ": {$DataUser['tentaikhoan']}";
              ?></h1></div>
            <div class="list">
                <a id="signup" href="index.php">Sign up</a>
                <a id="login" href="index.php?home=logout">
                    <?php
                        echo isset($_SESSION['login']) ? "Logout" : "Login";
                    ?>
                </a>
                <?php
                   if(!empty($_COOKIE['username']) && !empty($_COOKIE['password']))
                   echo "<a id='logout' href='index.php?home=logout'>Logout</a>";
                    else{
                   echo "";
                    }
                ?>
                <div class="animation start-home"></div>
            </div>
        </nav>
