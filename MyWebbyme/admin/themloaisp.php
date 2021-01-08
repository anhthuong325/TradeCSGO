<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    include ("./connect.php");
    if(isset($_POST["them"])){
        $ten=$_POST["tenloai"];
        $sql="INSERT INTO `loaisp` (`id`, `loai`) VALUES (NULL, '$ten ');";
        $r =$db->exec($sql);
    }
?>
<body>
    <form action="" method="post">
    TÊN LOẠI SP : <input type="text" name="tenloai" value=""  ><br>
    <input type="submit" value="Them" name="them">
    </form>
    <?php
// echo"<a class='ac' href='index.php?act=loai'>BACK</a>";
?>
</body>
</html>