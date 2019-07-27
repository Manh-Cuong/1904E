<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";

if (isset($_GET["email"])){
echo "<br>".$_GET["email"];
}
if (isset($_GET["username"])){
echo "<br>".$_GET["username"];
}
?>

<form action="" name="demo" method="get">
    <input type="text" name="email" value="" placeholder="email">
    <br>
    <input type="text" name="username" placeholder="username">
    <br>
    <input type="submit" name="submit" placeholder="Submit">
    <br>

</form>
</body>
</html>