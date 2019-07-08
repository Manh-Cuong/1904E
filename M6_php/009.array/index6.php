<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$array1=array("Hà nội", "Thanh hóa", "HCM");
echo "<pre>";
print_r($array1);
echo "</pre>";

echo "<br>".$array1[0];
echo "<br>".$array1[1];
echo "<br>".$array1[2];
//gán value cho 1 phần tử trong mảng thông qua key

$array1[0]="Thủ đô HN";
$array1[3]="Thành phố HCM";
echo "<pre>";
print_r($array1);
echo "</pre>";

?>
</body>
</html>