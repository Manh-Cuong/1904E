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
$sqlSelect="SELECT * FROM employees";

//thực hiện truy vấn
$result =$connection->query($sqlSelect);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Liệt kê danh sách nhân viên</h1>
            <h1><a href="create.php" class="btn btn-success">Thêm nhân viên mới</a></h1>
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Tên</td>
                        <td>Địa chỉ</td>
                        <td>Lương</td>
                        <td>Hành động</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if ($result->num_rows>0){
                        while ($row=$result->fetch_assoc()){

                        ?>
                <tr>
                    <td> <?php echo $row["id"] ?> </td>
                    <td> <?php echo $row["name"] ?> </td>
                    <td> <?php echo $row["address"] ?> </td>
                    <td> <?php echo $row["salary"] ?> </td>
                    <td>
                        <p><a href="edit.php?id=<?php echo $row["id"] ?>" class="btn btn-warning">Sửa nhân viên</a> </p>
                        <p><a href="delete.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">Xóa nhân viên</a> </p>
                    </td>
                </tr>
                            <?php
                        }
                    } else {
                        echo "Không tồn tại nhân viên nào";
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>