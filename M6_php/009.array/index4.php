<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
//cách khai báo mảng kiểu 1
//áp dụng cho mảng chỉ số, tự tạo key khi truyền value của phần tử
$array1=array("Hà nội", "Thanh hóa", "HCM");


//cách 2 khai báo key cho mảng chỉ số
$array1=array(0=>"Hà nội",1=> "Thanh hóa",2=> "HCM");

//cách 3
$array2=array();
$array2[]="Hà nội";
$array2[]="Thanh hóa";
$array2[]="HCM";

//cách số 4
$array3=array();
$array3["VietNam"]=array("name"=>"Việt Nam", "city"=>"Hà Nội","HCM");
$array3["ChiNa"]=array("name"=>"Trung Quốc", "city"=>"Bắc Kinh","Thượng Hải");
$array3["Japan"]=array("name"=>"Nhật Bản", "city"=>"ToKyo","Kyoto");
?>
</body>
</html>