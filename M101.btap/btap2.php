<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$location = 10;
$gender = 1;
?>
<form name="demo" action="" method="post">
    <p>
        <label>Địa điểm</label>
        <select name="location">
            <option value="">Chọn địa điểm</option>
            <option value="1" <?php echo($location == 1) ? "selected" : " " ?>>Bắc Ninh</option>
            <option value="2" <?php echo($location == 2) ? "selected" : " " ?> ?>>Bắc Giang</option>
            <option value="3" <?php echo($location == 3) ? "selected" : " " ?>>Quảng Ninh</option>
            <option value="4" <?php echo($location == 4) ? "selected" : " " ?>>Hải Phòng</option>
            <option value="5" <?php echo($location == 5) ? "selected" : " " ?>>Nam Định</option>
            <option value="6" <?php echo($location == 6) ? "selected" : " " ?>>Thanh Hóa</option>
            <option value="7" <?php echo($location == 7) ? "selected" : " " ?>>Nghệ An</option>
            <option value="8" <?php echo($location == 8) ? "selected" : " " ?>>Lào Cai</option>
            <option value="9" <?php echo($location == 9) ? "selected" : " " ?>>Hà Nam</option>
            <option value="10" <?php echo($location == 10) ? "selected" : " " ?>>Hà Nội</option>
        </select>
    </p>

    <p>
        <label>Giới tính</label>
        <input type="radio" name="gender" value="0" <?php if ($gender == 0) { echo "checked"; } else { echo ""; } ?>> Nữ
        <input type="radio" name="gender" value="1" <?php if ($gender == 1) { echo "checked"; } else { echo ""; } ?> > Nam

    </p>
</form>

</body>
</html>