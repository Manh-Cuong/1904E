<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    các hàm cơ bản trong mảng
    hàm array_keys lấy các key của mảng
    hàm array_pop trả về phần tử cuối cùng của mảng
    hàm array_push thêm 1 phần tử vào cuối mảng
</pre>
<?php
$array2=array();
$array2["hn"]="Hà nội";
$array2["th"]="Thanh hóa";
$array2["hcm"]="HCM";
echo "<pre>";
print_r($array2);
echo "</pre>";

$newArray=array_keys($array2);
$newArray1=array_pop($array2);
$newArray2=array_push($array2,"Nghệ An");

echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "<pre>";
print_r($newArray1);echo "<br>";
echo "<pre>";
print_r($newArray2);
echo "</pre>";

?>
</body>
</html>