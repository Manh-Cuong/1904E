<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<pre>
   Viết 1 function tính lương nhân viên
    có 2 tham số truyền vào hàm là : lương tháng và số ngày công
    sau đó trả về mức lương thực nhận của nhân viên đó
    Mặc định số ngày công trên 1 tháng là 24 được tính là đủ công
    ví dụ : lương tháng 10 triệu
    số ngày công là 12
    => lương thực lĩnh là 5 triệu
</pre>

<?php
    function LuongNhanVien($luong='10000000',$soCong='24'){
        if ($soCong==24){
            echo "Lương nhận được tháng này là $luong";
        }else{
            echo "Lương nhận được là ".$soCong*($luong/24);
        }
}
LuongNhanVien(10000000,26);
?>
</body>
</html>
