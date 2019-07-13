<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    loop mảng đa chiều
     yêu cầu in được ra tên của các  quốc gia và thành phố
    <ul>
    <li>Trung quốc</li>
        <ul>
            <li>Bắc kinh</li>
            <li>Thâm quyết</li>
            <li>Thành đô</li>
        </ul>

</ul>
<ul>
    <li>Hàn quốc</li>
    <li>Seun</li>
</ul>
<ul>
    <li>nhật bản</li>
    <li>tokyo</li>
</ul>
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

    foreach ($country as $keyCities => $cities) {
        echo "<ul>";
        if ($keyCities == "name") {
//        foreach ($country as $keyName => $nameCoutry){
            echo "<li>";
            echo "" . $cities;
            echo "</li>";
//        }
        }
    }
    foreach ($country as $keyCities => $cities){
        if ($keyCities=="city") {
//            echo "<br> " . $keyCities;
            foreach ($cities as $keyCity => $city){
                echo "<li>";
                echo "".$city;
                echo "<br>";
                echo "</li>";
            }
        }
        echo "</ul>";
    }

}

?>
</body>
</html>