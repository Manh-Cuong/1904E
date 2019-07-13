<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    loop mảng đa chiều
     yêu cầu in được ra tên của các thành phố
</pre>

<?php
$array3=array();
$array3["VietNam"]=array("name"=>"Việt Nam", "city"=>array("Hà Nội","HCM"));
$array3["ChiNa"]=array("name"=>"Trung Quốc", "city"=>array("Bắc Kinh","Thượng Hải"));
$array3["Japan"]=array("name"=>"Nhật Bản", "city"=>array("ToKyo","Kyoto"));
echo "<pre>";
print_r($array3);
echo "</pre>";
echo "<hr>";

foreach ($array3 as $keyCountry => $country){

    foreach ($country as $keyCities => $cities){
        if ($keyCities=="city") {
//            echo "<br> " . $keyCities;
            foreach ($cities as $keyCity => $city){
                echo "<br><br> ".$city;
            }
        }
    }

}

?>
</body>
</html>