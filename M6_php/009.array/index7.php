<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    mảng kết hợp là mảng mà key sẽ là chuỗi và số hoặc chuỗi

</pre>
<?php
$array2=array();
$array2["hn"]="Hà nội";
$array2["th"]="Thanh hóa";
$array2["hcm"]="HCM";
echo "<pre>";
print_r($array2);
echo "</pre>";

echo "<br>".$array2["hn"];
echo "<br>".$array2["th"];
echo "<br>".$array2["hcm"];
//thay đổi giá trị của phẩn tử
$array2["hn"]="Thủ đô HN";
echo "<pre>";
print_r($array2);
echo "</pre>";
?>
</body>
</html>
