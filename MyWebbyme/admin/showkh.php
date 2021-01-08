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
    $sql="DELETE FROM `khachhang` WHERE `khachhang`.`idkh` = $id";
    $r =$db->exec($sql);
}

 $sql="select * from taikhoan";
 $r= $db->query($sql);
if(isset($_POST["bt"])){
    $tenkh=$_POST["tenkh"];
    $diachi=$_POST["diachi"];
    $sdtkh=$_POST["sdtkh"];
    $emailkh=$_POST["emailkh"];
    $sql="INSERT INTO `khachhang` (`id`, `tenkh`, `diachi`, `sdt`, `email`) VALUES (NULL, '$tenkh', '$diachi', '$sdtkh', '$emailkh');";
    $r =$db->exec($sql);
}
?>
<table border="1px" class="table-table-collapse mb-50 bang">
<tr>
<th class="col-md-3">Mã KH</th>
<th class="col-md-3">Tên KH</th>
<th class="col-md-3">Dia Chi</th>
<th class="col-md-3">SDT</th>
<th class="col-md-3">Email</th>


</tr>
    <?php
while($row=$r->fetch()){
    ?>
<tr>
<td> <?php echo$row[0];?></td>
<td> <?php echo$row[3];?></td>
<td> <?php echo$row[4];?></td>
<td> <?php echo$row[5];?></td>
<td> <?php echo$row[6];?></td>
<td> <?php
    echo"<a class='bt1' href='?act=kh&xoa=$row[0]'>XÓA</a>";
        ?>
</td>
<td> <?php
    echo"<a class='bt1' href='?act=kh&sua=$row[0]'>SỬA</a>";
        ?></td>


</tr>

<?php
}
?>

</table>
<a class="bttthem"  href='?act=kh&them=$row[0]'>Thêm</a>

</body>
<style>
.table-table-collapse{
    border: 2px solid black;
    width: 100%;
    margin:0 auto; 
    text-align: center;
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