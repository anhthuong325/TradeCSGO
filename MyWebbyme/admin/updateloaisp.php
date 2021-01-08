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
        $id=$_GET["sua"];
        $sql1= "SELECT * FROM `loaisp` WHERE id=$id";
        $r1=$db->query($sql1);
        $r1=$r1->fetch();
        $ten=$r1[1];
    }
    if(isset($_POST["bt"])){
        $ten=$_POST["tenloai"];
        $id=$_POST["tenma"];
        $sql="UPDATE `loaisp` SET `loai` = '$ten' WHERE `loaisp`.`id` = $id;";
        $r =$db->exec($sql);
    }
?>
<body>
<form action="" method="post">
    MÃ LOẠI SP : <input type="text" name="tenma" value="<?php echo $id?>"  ><br>
    TÊN LOẠI SP : <input type="text" name="tenloai" value="<?php echo $ten?>"  ><br>
    <input type="submit" value="Sua" name="sua">
    </form>
</body>
</html>