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
$sqlSelect = "SELECT * FROM employees WHERE id=".$id;
$result = $connection->query($sqlSelect);
$row = $result->fetch_assoc();
echo "<pre>";
print_r($row);
echo "</pre>";
?>

<?php

// Kiểm tra xem có dữ liệu submit đi hay không
//!empty($_POST) có nghĩa là không rỗng tức là có dữ liệu trong mảng này
// isset($_POST) dùng để kiểm tra biến có tồn tại hay không

if (isset($_POST) && !empty($_POST) && isset($_POST["employee_id"])) {
    /**
     * Tạo ra 1 biến để check lỗi mặc định là rỗng
     */
    $errors = array();

    //!isset($_POST["name"]) => không tồn tại
    // empty($_POST["name"]) => rỗng

    //$errors rỗng tức là không có lỗi

    if (empty($errors)) {
        $id = (int) $_POST["employee_id"];




        $sqlDelete = "DELETE FROM employees  WHERE id=$id";


        // Thực hiện câu SQL

//        echo $sqlDelete;
        $result = $connection->query($sqlDelete);


        if ($result == true) {
            //nếu result = true thì thông báo thành công
            echo "<div class='alert alert-success'>Xóa nhân viên thành công ! <a href='btap1.php'>Trang chủ</a></div>";
        } else {
            //nếu result bằng false thì thông báo thất bại
            echo "<div class='alert alert-danger'>Xóa nhân viên thất bại !</div>";
        }
    }else{
        //lệnh implode dùng để chuyển mảng thành chuỗi
        $errors_string = implode("<br>", $errors);
        echo "<div class='alert alert-danger'>$errors_string</div>";
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Xóa nhân viên</h1>
            <form name="delete" action="" method="post">
                <input type="hidden" name="employee_id" value="<?php echo $row["id"] ?>">
                <div class="form-group">
                    <label>Tên nhân viên: </label>
                    <input type="text" name="name" class="form-control" value="<?php echo $row["name"] ?>">
                </div>
                <button type="submit" class="btn btn-danger">xóa nhân viên</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>