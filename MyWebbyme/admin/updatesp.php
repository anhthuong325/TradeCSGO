<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $id="";
    $ten="";
    include ("./connect.php");
    if(isset($_GET["sua"])){
        $idsp=$_GET["sua"];
        $sql1= "SELECT * FROM `sanpham` WHERE idsp=$idsp";
        $r1=$db->query($sql1);
        $r1=$r1->fetch();
        $tensp=$r1[1];
        $giacu=$r1[2];
        $giamoi=$r1[3];
        $loaisp=$r1[5];
        $hinhanh=$r1[4];
        $mota=$r1[6];
    }
    if(isset($_POST["updatesp"])){
        $tensp=$_POST["tensp"];
        $giacu=$_POST["giacu"];
        $giamoi=$_POST["giamoi"];
        $loaisp=$_POST["loaisp"];
        $hinhanh=$_POST["hinhanh"];
        $mota=$_POST["mota"];
        $sql="UPDATE `sanpham` SET `tensp` = '$tensp', `giacu` = '$giacu', `giamoi` = '$giamoi', `hinhanh` = '$hinhanh', `loaisp` = '$loaisp', `mota` = '$mota' WHERE `sanpham`.`idsp` = $idsp;";
        $r =$db->exec($sql);
    }
?>
<body>
<form action="" method="post">
Tên SP : <input type="text" name="tensp" value="<?php echo $tensp?>"  ><br>
    Giá Cũ : <input type="text" name="giacu" value="<?php echo $giacu?>"  ><br>
    Giá Mới : <input type="text" name="giamoi" value="<?php echo $giamoi?>"  ><br>
    Loại SP : <input type="text" name="loaisp" value="<?php echo $loaisp?>"  ><br>
    Hinh Anh : <input type="text" name="hinhanh" value="<?php echo $hinhanh?>"  ><br>
    Loại MT : <input type="text" name="mota" value="<?php echo $mota?>"  ><br>
    <input type="submit" value="Sua" name="updatesp">
    </form>
</body>
</html>