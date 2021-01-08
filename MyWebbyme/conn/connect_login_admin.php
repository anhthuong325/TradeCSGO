<?php
    $conn = mysqli_connect('localhost','root','','admin');
    if(!$conn){
        die("Kết nối thất bại" . mysqli_connect_error());
    }
?>