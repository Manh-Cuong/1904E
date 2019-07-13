<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    các hàm xử lý trong mảng

</pre>
<?php
$array1=array(1,2,3);
//đếm số phần từ của mảng
echo "<br> hàm count ".count($array1);

//kiểm tra 1 biến có phải 1 mảng hay k
//nếu trả về giá trị true thì là 1 mảng
//nếu trả về false thì k phải là 1 mảng
echo "<br> hàm is_array ";
var_dump(is_array($array1));

//kiểm tra xem 1 mảng có rỗng k
echo "<br> hàm empty ";
var_dump(empty($array1));


?>
</body>
</html>