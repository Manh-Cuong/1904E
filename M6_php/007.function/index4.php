<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
     truyền tham chiếu và truyền tham trị trong php
    truyền tham trị đơn giản là truyền giá trị cho tham số
     trước trên tham số sẽ đặt 1 dấu & trước tên biến
    Và sau khi tham chiếu biến truyền cho tham số
    hiểu đơn giản sẽ tham chiếu đến cùng ô nhớ với tham số
    dẫn tới là khi tham số thay đổi thì biến truyền cho tham số cũng sẽ bị thay đổi
</pre>
<?php
    function truyenThamChieu(&$i){
        $i=$i*10;
        echo "giá trị của biến ".$i;
    }
    $x=5;
    truyenThamChieu($x);

    echo "Giá trị của biến x ".$x;
?>
</body>
</html>