<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    mảng là 1 kiểu dữ liệu lưu trữ được nhiều giá trị
    trong php có 3 kiểu mảng
    1. mảng chỉ số
    2. mảng kết hợp
    3. mảng đa chiều (mảng lồng mảng>
    trong mảng 2 khái niệm cần nắm được
    trong mảng gồm nhiều phần từ
    key: là chỉ số của các phần tử trong mảng
    value: là giá trị của phần tử trong mảng
    không echo được mảng
    phần tử trong mảng bao gồm cả key và value

    mảng chỉ số là mảng mà có các key là các chỉ số
    chú ý mặc định key trong mảng bắt đầu từ 0
</pre>
<?php
$array1=array("Hà nội", "Thanh hóa", "HCM");
echo "<pre>";
print_r($array1);
echo "</pre>";

?>
</body>
</html>
