<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "test";

$connect = mysqli_connect($host,$username,$password,$database)
    or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");

    //echo "เชื่อมต่อฐานข้อมูลสำเร็จ";

?>  