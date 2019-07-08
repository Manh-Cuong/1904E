<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    mảng đa chiều là mảng mà phần tử trong mảng là 1 mảng. lồng nhau nhiều cấp

</pre>
<?php
$array3=array();
$array3["VietNam"]=array("name"=>"Việt Nam", "city"=>array("Hà Nội","HCM"));
$array3["ChiNa"]=array("name"=>"Trung Quốc", "city"=>array("Bắc Kinh","Thượng Hải"));
$array3["Japan"]=array("name"=>"Nhật Bản", "city"=>array("ToKyo","Kyoto"));
echo "<pre>";
print_r($array3);
echo "</pre>";

echo "<br>".$array3["ChiNa"]["name"];
echo "<br>".$array3["ChiNa"]["city"]["0"];

?>
</body>
</html>
