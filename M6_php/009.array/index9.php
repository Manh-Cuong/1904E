<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>

</pre>
<?php
$array1=array("Hà nội", "Thanh hóa", "HCM");
echo "<pre>";
print_r($array1);
echo "</pre>";
//cú pháp rút gọn
foreach ($array1 as $value){
    echo "<br>".$value;

}
//cú pháp lặp mảng đầy đủ
foreach ($array1 as $key => $value){
    echo "<br>".$key." - ".$value;

}
echo "<br>";

//cú pháp ít dùng
foreach ($array1 as $key => $value){
    echo "<br>".$key." - ".$array1[$key];

}
echo "<br>";

?>
</body>
</html>
