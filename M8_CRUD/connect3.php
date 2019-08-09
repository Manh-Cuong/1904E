<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="db2";
$connection = new mysqli($servername, $username, $password,$dbname);
if ($connection->connect_error){
    die("Kết nối thất bại");
}
echo "kết nối thành công";