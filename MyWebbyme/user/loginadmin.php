<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginadminstyle.css">
    <title>Login User</title>
</head>

<body>
<?php
    require('connect_login_admin.php');
if(isset($_POST["btlogin"])){
    $name=$_POST["name"];
    $pass=$_POST["pass"];
    $sql="SELECT * FROM `taikhoan` WHERE user='$name' and pass='$pass'";
    $query=mysqli_query($conn,$sql);
            $num_row=mysqli_num_rows($query);
            if($num_row!=0){
                echo "Bạn đã đăng đăng nhập thành công";
                header("location: ../admin/index.php");
            }else{
                echo "<p>Tên hoặc mật khẩu không đúng</p>";
                
            }      

}
?>
<header class="row mh bimg1">
        <div class="boxcenter">

            <div class="top row ">
                <div class="logo">
                    <img src="../img/logo.jpg">
                </div>
                <div class="menu">
                    <a href="index.php">HOME</a>
                    <a href="shop.php">SHOP GUN</a>
                    <a href="our.php">INTRODUCTION</a>
                    <a href="cus.php">INFORMATION</a>
                </div>
                <div class="login">
                    <a href="loginadmin.php">
                    <img src="../img/login.png" alt="">
                    </a>                  

                </div>
                <div class="relati">
                    <div class="logintext">

                    </div>
                </div>
            </div>
            <div class="relati">
                <div class="giohang">
                    <a href="#"><img src="../img/giohang.png" alt=""></a>
                </div>
            </div>
        <div class="row1 boxcenter1 cen  ">


            <div class="dangnhap">
                <br /><br />
                <H2>LOGIN ADMIN</H2><br /><br />
            </div>
            <form action="" method="post">
            
            <div class="id">
                <input type="text" name="name" placeholder="Tài khoản của Web" value=""><br /><br />
            </div>
            <div class="pa">
                <input type="password" name="pass" placeholder="Mật Khẩu" value=""><br /><br />
            </div>
            <div class="btlogin">
                <button type="submit" name="btlogin" value="">Đăng Nhập</button><br /><br /><br />            
                    
           </form>
    </header>
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
            <img src="../img/btt1.png" width="25px" height="25px">
            <a href="#">Back to Top</a>
        </div>
        <div class="foo">
        <p>From LAT with love</p>
        </div>
    </div>
</body>

</html>