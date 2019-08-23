<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php

// Nạp kết nối CSDL

include_once "config.php";

$id = (int) $_GET["id"];
var_dump($id);
$sqlSelect = "SELECT * FROM products WHERE id=".$id;
$result = $connection->query($sqlSelect);
$row = $result->fetch_assoc();
echo "<pre>";
print_r($row);
echo "</pre>";
?>

<?php

if (isset($_POST) && !empty($_POST) && isset($_POST["id"])) {

    $errors = array();
    if (empty($errors)) {
        $id = (int) $_POST["id"];

        $sqlDelete = "DELETE FROM products  WHERE id=$id";

        $result = $connection->query($sqlDelete);


        if ($result == true) {
            //nếu result = true thì thông báo thành công
            echo "<div class='alert alert-success'>Xóa sản phẩm thành công ! <a href='index.php'>Trang chủ</a></div>";
        } else {
            //nếu result bằng false thì thông báo thất bại
            echo "<div class='alert alert-danger'>Xóa sản phẩm thất bại !</div>";
        }
    }else{
        $errors_string = implode("<br>", $errors);
        echo "<div class='alert alert-danger'>$errors_string</div>";
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Xóa sản phẩm</h1>
            <form name="delete" action="" method="post">
                <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                <div class="form-group">
                    <label>Tên sản phẩm: </label>
                    <input type="text" name="product_title" class="form-control" value="<?php echo $row["product_title"] ?>">
                </div>
                <button type="submit" class="btn btn-danger">xóa sản phẩm</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>