<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP GUN CS</title>
    <link rel="stylesheet" href="css/shopstyle.css">
</head>

<body>
    <header class="row mh bimg1">
        <div class="boxcenter">

            <div class="top row">
                <div class="logo">
                    <img src="img/logo.jpg">
                </div>
                <div class="menu">
                    <a href="index.php">HOME</a>
                    <a href="shop.php">SHOP GUN</a>
                    <a href="our.php">INTRODUCTION</a>
                    <a href="cus.php">INFORMATION SHOP</a>
                </div>
                <div class="login">

                    <img src="img/login.png" alt="">

                    </a>

                </div>
                <div class="relati">
                    <div class="logintext">
                        <a href="login.php">Login</a>

                    </div>
                </div>


            </div>
            <div class="relati">
                <div class="giohang">
                    <a href="#"><img src="img/giohang.png" alt=""></a>
                </div>

            </div>
    </header>
    <?php
    include ('conn/connect.php');
    $sql = "select * from sanpham";
    $result = $db->query ($sql);
?>
    <?php
        while($value = $result->fetch())  
        { 
    ?>
        <div class="column">
            <div class="sp">
                <div class="ten">
                <?php echo $value["tensp"]?>
                </div>
                <div class="hinh">
                <img src="<?php echo $value["hinhanh"]?>">
                </div>
                <div class="gia">
                <del><?php echo $value["giacu"]?></del> 
                <?php echo $value["giamoi"]?>
                </div>
                <div class="ct">
                <a href="#">Xem Chi Tiết</a>
                </div>
                <div class="mua">
                <a href="login.php">Mua Ngay</a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    
</body>
<style>
.ten{
    font-size: 15pt;
    font-weight: bold;
}
.column{
    width: 70%;
    margin: 0 auto;
}
.sp {
    margin-top: 50px;
    text-align: center;
    float:left;
    margin-bottom: 20px;
    margin-right: 4px;
    width: calc(25% - 8px);
    border: 1px solid black;
    border-radius: 10px;
}
del{
    color:red;
}
.hinh img{
    width:180px;
    height:100px;
    border-radius: 2px;
}
.mua{
    background-color: aquamarine;
    color: black;
    border-radius: 10px;
    
}
.mua a{
    text-decoration: none;
    font-weight: bold;
    color:black;
}
.mua:hover{
    background-color: tomato;
    color: blue;
    text-decoration: none;
    font-weight: bold;
    transition: 0.5s;
}
.ct a{
    text-decoration: none;
}
</style>
    <div class="row mh3 brfooter relati">
        <div class="ip">
            <label>Subscribe to Updates</label><br>
            <input type="text" name="text">
        </div>
        <div class="sub"><a href="#">Subscribe Now</a></div>
        <div class="link">
            <a href="#">FAQ</a><br />
            <a href="#">What's New</a><br />
            <a href="#">Contact Us</a>
        </div>
        <div class="btt">
            <img src="img/btt1.png" width="25px" height="25px">
            <a href="#">Back to Top</a>
        </div>
        <div class="foo">
            <p>From LAT with love</p>
        </div>
    </div>








</body>

</html>