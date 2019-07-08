<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<pre>
    lấy giá trị của từng ô input post đi từ $_post
    vì $_post là 1 mảng nên muốn lấy giá trịc ủa từng phần từ truy cập $_post['key']
</pre>


<?php

function LuongNhanVien($luong = '10000000', $soCong = '24')
{
    if ($soCong == 24) {
        echo "Lương nhận được là $luong";
    } else {
        echo "Lương nhận được là " . $soCong * ($luong / 24);
    }
}


echo "<pre>";
print_r($_POST);
echo "</pre>";
//$salazy= $_POST["salazy"];
//$day= $_POST["day"];
//echo "<br> username: ".$username;
//echo "<br> Pass: ".$password;
$net_salazy=0;
$salazy='';
$day='';
if (isset($_POST["salazy"]) && ($_POST["day"])){
    $salazy=$_POST["salazy"];
    $day=$_POST["day"];
    if (($salazy > 0) && ($day > 0)) {
        $net_salazy = LuongNhanVien($salazy, $day);
    }

}
?>
<div class="container">
    <div class="row">
        <form action="" name="demo" method="post">
            <p>
                Lương tháng: <input type="text" name="salazy">
            </p>
            <p>
                Số ngày công: <input type="password" name="day">
            </p>
            <p>
                Lương thực lĩnh :
                <?php
                if ($net_salazy > 0) {
                    echo $net_salazy;
                }
                ?>
            </p>
            <p>
                 <input type="submit" name="submit" value="Tính Lương">
            </p>
        </form>
    </div>
</div>
</body>
</html>