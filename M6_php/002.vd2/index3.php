<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>
<body>
<pre>
    biến trong php
    là là thứ, cái, khái niệm dùng để chứa giá trị như chuỗi hoặc số và biến có đặc điểm là thay đổi trong quá trình chạy
    biến trong php bắt đầu bằng $
    tên biến trong php phải bắt đầu bằng 1 chữ cái
    tên biến chỉ nên chứa chữ số hoặc chữ cái hay kí tự _ mà k chứa những kí tự đặc biệt
    tên biến k được phép chứa dấu tiếng việt hay dấu cách
    trong php nối chuỗi thì dùng dấu chấm
</pre>

<?php
$ten="Nguyen Quang Anh";
$tuoi=18;
$quehuong="Hà Nội";
echo "<br>tên là: ".$ten;
echo "<br>tuổi là: ".$tuoi;
echo "<br>quê hương là: ".$quehuong;
?>

<pre>
    nếu trong "" mà in ra tên của biến thì php sẽ hiểu trong nháy kép là giá trị của biến
    nếu trong '' mà in ra tên biến thì php sẽ hiểu là 1 chuỗi bth

</pre>
<?php echo "<br> $ten";?>
<?php echo '<br> $ten';?>
</body>
</html>
