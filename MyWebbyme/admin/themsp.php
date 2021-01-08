<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    include ("./connect.php");
    if(isset($_POST["themsp"])){
        $tensp=$_POST["tensp"];
        $giacu=$_POST["giacu"];
        $giamoi=$_POST["giamoi"];
        $loaisp=$_POST["loaisp"];
        $hinhanh=$_POST["hinhanh"];
        $mota=$_POST["mota"];
        $sql="INSERT INTO `sanpham` (`idsp`, `tensp`, `giacu`, `giamoi`,`hinhanh`, `loaisp`, `mota`) VALUES (NULL, '$tensp', '$giacu', '$giamoi','$hinhanh', '$loaisp', '$mota');";
        $r =$db->exec($sql);
    }
?>
<body>
    <form action="" method="post">
    Tên SP : <input type="text" name="tensp" value=""  ><br>
    Giá Cũ : <input type="text" name="giacu" value=""  ><br>
    Giá Mới : <input type="text" name="giamoi" value=""  ><br>
    Loại SP : <input type="text" name="loaisp" value=""  ><br>
    Hinh Ảnh : <input type="text" name="hinhanh" value=""  ><br>
    Mô Tả : <input type="text" name="mota" value=""  ><br>
    <input type="submit" value="Them" name="themsp">
    </form>
    <!-- <a class='ac' href='index.php?act=kh'>BACK</a> -->

    <?php
// echo"<a class='ac' href='act=kh>BACK</a>";
?>
</body>
</html>