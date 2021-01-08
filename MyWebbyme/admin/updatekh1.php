<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
 include ("connect.php");
 $id="";
 $ten="";
if(isset($_GET["sua"]))
    {
        $id= $_GET["sua"];
        $sql1= "SELECT * FROM `taikhoan` WHERE id=$id";
        $r1= $db->query($sql1);
        $r1= $r1->fetch();
        $tenkh= $r1[1]; 
        $id=$r1[0];
        $name=$r1[3];
        $dc=$r1[4];
        $dt=$r1[5];
        $em=$r1[6];
    }    
    
 if (isset($_POST["btnUpdate"]))
    {
        $id= $_POST["txtID"];
        $name = $_POST["txtTen"];
        $dc= $_POST["txtdc"];
        $dt= $_POST["txtdt"];
        $em= $_POST["txtem"];
        $sql= "UPDATE `taikhoan` SET `tenkh` = '$name', `diachi` = '$dc', `sdt` = '$dt',`email` = '$em'  WHERE `taikhoan`.`id` = $id ";
        $r= $db->exec($sql);
    }
?>
<body>
    <form action="" method="post">      
        
        
        Mã id: <input type="text" name="txtID" value="<?php echo $id?>" id=""> <br>
        Thay đổi tên khách hàng: <input type="txt" name="txtTen" value="<?php echo $name ?>" id=""> <br>
        Thay đổi địa chỉ: <input type="text" name="txtdc" value="<?php echo $dc?>" id=""> <br>
        Thay đổi điện thoại: <input type="text" name="txtdt" value="<?php echo $dt?>" id=""> <br>
        Thay đổi emal: <input type="email" name="txtem" value="<?php echo $em?>" id=""> <br>
        <input type="submit" name="btnUpdate" value="Sửa">
        
    </form>
</body>
<style>
    form {
        margin-top: 20px;
    }
    form input{
        margin-top: 10px;
    }
</style>
</html>