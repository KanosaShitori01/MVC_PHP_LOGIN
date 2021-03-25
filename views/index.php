    <?php
    include 'inc/header.php';
    ?>
    <div class="main">
        <div class="container">
            <div class="column left">
                <h1>Welcome Back <?php
                    echo $DataUser['tentaikhoan'];
                ?></h1>
                <h2>Vị trí: <?php echo $DataUser['vitri'];?></h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure inventore porro minima doloremque eum magnam repellendus mollitia, dicta laboriosam eaque qui adipisci pariatur ratione magni omnis praesentium nam aliquid voluptatibus?</p>
            </div>
            <div class="column right">
                <img src="img/img1.png" alt="" sizes="" srcset="">
            </div>
        </div>
    </div>
    </div>
    <?php
    include 'inc/footer.php';
    ?>