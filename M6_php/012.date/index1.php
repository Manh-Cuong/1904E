<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    timezone là múi giờ
    giờ việt nam là múi giờ : "Asia/Ho_Chi_Minh"
    link các múi giờ của châu á:http:/www.php.net/manual/en/timezone.asia.php
    link các múi giờ của thế giới:http:/www.php.net/manual/en/timezone.php
    nếu muốn lấy giờ hiện tại chính xác thì cần đặt đúng giờ của zone đó
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    nếu muốn chuyển múi giờ thì cần thay đổi tham số trong hàm date_default_timezone_set('Asia/Ho_Chi_Minh');
    mình sẽ có 2 kiểu lấy giờ trong php
    kiểu 1 là kiểu cho người đọc
    kiểu 2 là kiểu của linux
</pre>
<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
echo "<br> Giờ cho người đọc : " . date("H:i:s d/m/Y");
echo "<br> Giờ của linux ( timestamp )  : " . time();
?>
</body>
</html>