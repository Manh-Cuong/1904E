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
echo "<pre>";
print_r($_POST);
echo "</pre>";
$username= $_POST["username"];
$password= $_POST["password"];
echo "<br> username: ".$username;
echo "<br> Pass: ".$password;
?>
<div class="container">
    <div class="row">
        <form action="" name="demo" method="post">
            <p>
                Username: <input type="text" name="username">
            </p>
            <p>
                Password: <input type="password" name="password">
            </p>
            <p>
                 <input type="submit" name="submit" value="Login">
            </p>
        </form>
    </div>
</div>
</body>
</html>