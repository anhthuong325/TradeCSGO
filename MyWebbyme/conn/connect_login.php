<?php
    $conn = mysqli_connect('localhost','root','','csdl');
    if(!$conn){
        die("Kết nối thất bại" . mysqli_connect_error());
    }
?>
