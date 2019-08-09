<?php
// khai báo 4 hằng số
define("DB_SEVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "appcrud");


//kết nối csdl
$connection= mysqli_connect(DB_SEVER,DB_USER,DB_PASSWORD,DB_NAME);
if (!$connection){
    die("kết nối thất bại đến csdl");
}
echo "Kết nối thành công đến csdl";