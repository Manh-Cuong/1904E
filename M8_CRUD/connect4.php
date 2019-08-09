<?php
$servername = "localhost";
$username = "root";
$password = "";

$connection = mysqli_connect($servername, $username, $password);
if (!$connection){
    die("Kết nối thất bại");
}
echo "kết nối thành công";