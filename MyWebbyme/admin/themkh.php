<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    include ("./connect.php");
    if(isset($_POST["themkh"])){
        $tenkh=$_POST["tenkh"];
        $diachi=$_POST["diachi"];
        $sdtkh=$_POST["sdtkh"];
        $emailkh=$_POST["emailkh"];
        $sql="INSERT INTO `khachhang` (`idkh`, `tenkh`, `diachi`, `dienthoai`, `email`) VALUES (NULL, '$tenkh', '$diachi', '$sdtkh', '$emailkh');";
        $r =$db->exec($sql);
    }
?>
<body>
    <form action="" method="post">
    Tên KH : <input type="text" name="tenkh" value=""  ><br>
    Địa Chỉ : <input type="text" name="diachi" value=""  ><br>
    SDT : <input type="text" name="sdtkh" value=""  ><br>
    Email : <input type="text" name="emailkh" value=""  ><br>
    <input type="submit" value="Them" name="themkh">
    </form>
    <!-- <a class='ac' href='index.php?act=kh'>BACK</a> -->

    <?php
// echo"<a class='ac' href='act=kh>BACK</a>";
?>
</body>
</html>