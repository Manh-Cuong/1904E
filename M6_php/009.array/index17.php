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
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>
</body>
</html>