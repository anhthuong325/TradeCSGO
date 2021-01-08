<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include("connect.php");
if(isset($_GET["xoa"])){
    $id=$_GET["xoa"];
    $sql="DELETE FROM `loaisp` WHERE `loaisp`.`id` = $id";
    $r =$db->exec($sql);
}

include ("./connect.php");
    if(isset($_POST["bt"])){
        $ten=$_POST["tenloai"];
        $sql="INSERT INTO `loaisp` (`id`, `loai`) VALUES (NULL, '$ten ');";
        $r =$db->exec($sql);
    }
    $sql="select * from loaisp";
$r= $db->query($sql);

?>
<table border="1px" class="table-table-collapse mb-50 bang">
<tr>
<th class="col-md-3">Mã loại</th>
<th class="col-md-3">Tên loại</th>
<th class="col-md-3">Thao Tác Xóa</th>
<th class="col-md-3">Thao Tác Sửa</th>

</tr>
    <?php
while($row=$r->fetch()){
    ?>
<tr>
<td> <?php echo$row[0];?></td>
<td> <?php echo$row[1];?></td>
<td> <?php
    echo"<a class='bt1' href='?act=loai&xoa=$row[0]'>XÓA</a>";
        ?>
</td>
<td> <?php
    echo"<a class='bt1' href='?act=loai&sua=$row[0]'>SỬA</a>";
        ?></td>
      
</tr>

<?php
}
?>
 
</table>

<a class="bttthem"  href='?act=loai&them'>Thêm</a>

</body>
<style>
.table-table-collapse{
    border: 2px solid black;
    width: 100%;
    margin:0 auto; 
    text-align: center;
}
a{
   
}
.ac{
    color: red;
    margin-left:413px;

}
.mb-50{
    margin-bottom: 10px;
}
.bttthem{
    
    margin-top:50px;
}
.bttthem{
    background-color: black;
    color: white;
    padding: 3px;
    text-decoration:none;
    
}
.bang th{
    background-color: aquamarine;
}
.bt1{
    background-color: black;
    color: white;
    border: 1px solid black;
    text-decoration:none;
    
}
</style>
</html>