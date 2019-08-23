<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
//nạp kết nối csdl
include_once "config.php";
$sqlSelect="SELECT * FROM products";

//thực hiện truy vấn
$result =$connection->query($sqlSelect);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Liệt kê danh sách sản phẩm</h1>
            <h1><a href="create.php" class="btn btn-success">Thêm sản phẩm mới</a></h1>
            <table class="table">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Tên sản phẩm</td>
                    <td>Mô tả</td>
                    <td>Thời gian tạo</td>
                    <td>Giá sản phẩm</td>
                    <td>Số Lượng sản phẩm</td>
                    <td>Trạng thái</td>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody>
                <?php
                if ($result->num_rows>0){
                    while ($row=$result->fetch_assoc()){

                        ?>
                        <tr>
                            <td> <?php echo $row["id"] ?> </td>
                            <td> <?php echo $row["product_title"] ?> </td>
                            <td> <?php echo $row["product_desc"] ?> </td>
                            <td> <?php echo $row["created"] ?> </td>
                            <td> <?php echo $row["price"] ?> </td>
                            <td> <?php echo $row["quantity"] ?> </td>
                            <td> <?php echo $row["status"] ?> </td>
                            <td>
                                <p><a href="edit.php?id=<?php echo $row["id"] ?>" class="btn btn-warning">Sửa sản phẩm</a> </p>
                                <p><a href="delete.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">Xóa sản phẩm</a> </p>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "Không tồn tại sản phẩm nào";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>