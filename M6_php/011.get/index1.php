<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    $_GET trong php thì nó có 2 tác dụng
    1, lấy những tham số từ url xuống
    2, lấy những dữ liệu post đi từ form có method là get
    =>
    1.www.abc.com?name=nguyenvana&email=nguyenvana@gmail.com&age=21
    những cái giá trị sau dấu ? trên url được gọi là query string có thể lấy giá trị của những tham số từ url xuống
</pre>
<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";

//lấy từng giá trị trong $_get thì sẽ lấy giá trị như trong 1 mảng
if (isset($_GET["name"])){
    echo "<br>".$_GET["name"];
}
if (isset($_GET["age"])){
    echo "<br>".$_GET["age"];
}
if (isset($_GET["email"])){
    echo "<br>".$_GET["email"];
}
?>
</body>
</html>