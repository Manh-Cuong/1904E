<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>
<body>
<pre>
    in ra chuỗi trong php
    có 2 cách: cách 1 để chuỗi trong nháy kép ""

</pre>

<?php
echo "<br> Hà Nội";
echo "<br> Đà Nẵng";
echo "<br> HCM";
?>

<pre>
    cách 2: in ra trong nháy đơn
</pre>

<?php
echo '<br> Hà Nội';
echo '<br> Đà Nẵng';
echo '<br> HCM';
?>

<pre>
    để giải quyết có 2 cách làm chính :
    -cách 1 là dùng nháy kép để bao nháy đơn hoặc ngược lại
    -cách 2 là dùng kí tự escape để phân biệt nháy báo chuỗi \
        và nháy xuất ra màn hình phải được đặt sau escape \' hoặc \"
</pre>
<?php
echo "<br>chao 'HN'";
?>

<?php
echo '<br>chao \'HN\'';

?>

<?php
echo '<br>chao "HN"';
?>
</body>
</html>
