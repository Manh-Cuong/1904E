<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<pre>
    thuộc tính action sẽ chứa url mà form post dlieu đến
    nếu action="" thì form post dữ liệu đến chính url hiện tại
    $_post để lấy dữ liệu từ form post đi với điều kiện method của form là post
    $_post sẽ là 1 mảng trong php
    nếu k có dữ liệu post đi thfi $_post sex là mảng rỗng 
    các key trong mảng sẽ là tên của các ô input tương ứng
</pre>
<div class="container">
    <div class="row">
        <form action="process.php" name="demo" method="post">
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