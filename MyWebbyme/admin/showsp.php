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
    $sql="DELETE FROM `sanpham` WHERE `sanpham`.`idsp` = $id";
    $r =$db->exec($sql);
}

 $sql="select * from sanpham";
 $r= $db->query($sql);
if(isset($_POST["bt"])){
        $tensp=$_POST["tensp"];
        $giacu=$_POST["giacu"];
        $giamoi=$_POST["giamoi"];
        $loaisp=$_POST["loaisp"];
        $mota=$_POST["mota"];
    $sql="INSERT INTO `sanpham` (`idsp`, `tensp`, `giacu`, `giamoi`,`hinhanh`, `loaisp`, `mota`) VALUES (NULL, '$tensp', '$giacu', '$giamoi','$hinhanh', '$loaisp', '$mota');";
    $r =$db->exec($sql);
}
$sql="select * from sanpham";
$r= $db->query($sql);
?>
<table border="1px" class="table-table-collapse mb-50 bang">
<tr>
<th class="col-md-3">Mã SP</th>
<th class="col-md-3">Tên SP</th>
<th class="col-md-3">Gia Cũ</th>
<th class="col-md-3">Gia Mới</th>
<th class="col-md-3">Hinh Ảnh</th>
<th class="col-md-3">Loại SP</th>
<th class="col-md-3">Mô Tả</th>


</tr>
    <?php
while($row=$r->fetch()){
    ?>
<tr>
<td> <?php echo$row[0];?></td>
<td> <?php echo$row[1];?></td>
<td> <?php echo$row[2];?></td>
<td> <?php echo$row[3];?></td>
<td><img class="im" src="<?php echo $row[4];?>"></td>
<td> <?php echo$row[5];?></td>
<td> <?php echo$row[6];?></td>
<td> <?php
    echo"<a class='bt1' href='?act=sp&xoa=$row[0]'>XÓA</a>";
        ?>
</td>
<td> <?php
    echo"<a class='bt1'  href='?act=sp&sua=$row[0]'>SỬA</a>";
        ?></td>


</tr>

<?php
}
?>

</table>
<a class="bttthem"  href='?act=sp&them=$row[0]'>Thêm</a>

</body>
<style>
.bttthem{
    
    margin-top:50px;
}
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
.im{
    width:50px;
    height:40px;
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