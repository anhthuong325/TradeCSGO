<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginstyle.css">
    <title>Đăng kí</title>
</head>

<body>
<?php
    require('conn/connect_login.php');
if(isset($_POST["btlogin"])){
    $name=$_POST["name"];
    $pass=$_POST["pass"];
    $passnl=$_POST["passnl"];
    $ten = $_POST["ten"];
    $diachi = $_POST["diachi"];
    $sdt = $_POST["sdt"];
    $email = $_POST["mail"];
    if($name == "" || $pass == "" || $ten == "" || $diachi == "" || $sdt == "" || $email == "" ){
                echo "<p>Bạn phải nhập đầy đủ thông tin!</p>";   
    }else if($passnl != $pass){
        echo "Mật khẩu nhập lại không giống với mật khẩu bạn nhập";
    }else{
        $sql="INSERT INTO `taikhoan` (`id`, `user`, `pass`, `tenkh`, `diachi`, `sdt`, `email`) VALUES (NULL, '$name', '$pass', '$ten','$diachi','$sdt','$email');";
        $query=mysqli_query($conn,$sql);
            echo"<p>Bạn đã đăng kí thành công!</p>";
            header("location: login.php");
        }    
}
?>

<header class="row mh bimg1">
        <div class="boxcenter">

            <div class="top row ">
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
                    <a href="login.php">
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
        <div class="row1 boxcenter1 cen  ">


            <div class="dangnhap">
                <br /><br />
                <H2>ĐĂNG KÍ TÀI KHOẢN</H2><br /><br />
            </div>
            <form action="" method="post">
            
            <div class="id">
                <input type="text" name="name" placeholder="Tài khoản của Web" value=""><br /><br />
            </div>
            <div class="pa">
                <input type="password" name="pass" placeholder="Mật Khẩu" value=""><br /><br />
                <input type="password" name="passnl" placeholder="Nhập Lại Mật Khẩu" value=""><br /><br />
            </div>
            <div class="pa">
                <input type="text" name="ten" placeholder="Họ Và Tên" value=""><br /><br />
                <input type="text" name="diachi" placeholder="Địa Chỉ" value=""><br /><br />
                <input type="text" name="sdt" placeholder="Số Điện Thoại" value=""><br /><br />
                <input type="text" name="mail" placeholder="Email" value=""><br /><br />
            </div>
            <div class="btlogin">
                <button type="submit" name="btlogin" value="">Đăng Ký</button><br /><br /><br />
            </div>

            </div>
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
            <img src="img/btt1.png" width="25px" height="25px">
            <a href="#">Back to Top</a>
        </div>
        <div class="foo">
            <p>From LAT with love</p>
        </div>
    </div>
</body>

</html>