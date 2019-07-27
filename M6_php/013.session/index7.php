<?php

//khởi động session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Xóa toàn bộ các session</h1>
<?php
//tạo ra 2 biến session trong php
$_SESSION["user_name"]="admin";
$_SESSION["user_email"]="admin@gmail.com";

//hoặc gán 1 biến vào $_session
$location="Hà Nội";
$_SESSION["user_location"]=$location;

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>

<?php
//hủy toàn bộ session trong php
session_unset();
session_destroy();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
</body>
</html>
