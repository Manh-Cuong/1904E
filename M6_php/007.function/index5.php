<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
     truyền tham chiếu và truyền tham trị trong php
    truyền tham trị đơn giản là truyền giá trị cho tham số cho hàm

</pre>
<?php
    function truyenThamTri($i){
        $i=$i*10;
        echo "giá trị của biến ".$i;
    }
    $x=5;
    truyenThamTri($x);

    echo "<br>Giá trị của biến x ".$x;
?>
</body>
</html>