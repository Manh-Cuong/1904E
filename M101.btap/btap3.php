<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$locations = array();
$locations[1] = "Bắc Ninh";
$locations[2] = "Bắc Giang";
$locations[3] = "Quảng Ninh";
$locations[4] = "Hải Phòng";
$locations[5] = "Nam Định";
$locations[6] = "Thanh Hóa";
$locations[7] = "Nghệ An";
$locations[8] = "Lào Cai";
$locations[9] = "Hà Nam";
$locations[10] = "Hà Nội";

$location=10;
$gender=1;
?>
<form name="demo" action="" method="post">
        <label>Địa điểm</label>
        <select name="location">
            <option value="">Chọn địa điểm</option>
            <?php foreach($locations as $locations_key => $locations_value) : ?>
                <option value="<?php echo $locations_key ?>" <?php if ($location == $locations_key) { echo "selected"; } else { echo ""; } ?>><?php echo $locations_value ?></option>
            <?php endforeach; ?>
        </select>

        <label>Giới tính</label>
        <input type="radio" name="gender" value="0" <?php if ($gender == 0) { echo "checked"; } else { echo ""; } ?>> Nữ
        <input type="radio" name="gender" value="1" <?php if ($gender == 1) { echo "checked"; } else { echo ""; } ?> > Nam
</form>
</body>
</html>