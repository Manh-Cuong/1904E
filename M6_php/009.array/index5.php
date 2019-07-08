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
//cách 1
$array2=array();
$array2["hn"]="Hà nội";
$array2["th"]="Thanh hóa";
$array2["hcm"]="HCM";

//cách 2
$array2=array("hn"=>"Hà nội","th"=>"Thanh hóa","hcm"=>"HCM");

echo "<pre>";
print_r($array2);
echo "</pre>";

?>
</body>
</html>
