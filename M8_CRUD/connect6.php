<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="db1";
$connection = mysqli_connect($servername, $username, $password,$dbname);
if (!$connection){
    die("Kết nối thất bại");
}
echo "kết nối thành công";