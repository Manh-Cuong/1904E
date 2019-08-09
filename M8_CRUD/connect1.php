<?php
$servername = "localhost";
$username = "root1";
$password = "";

$connection = new mysqli($servername, $username, $password);
if ($connection->connect_error){
    die("Kết nối thất bại");
}
echo "kết nối thành công";