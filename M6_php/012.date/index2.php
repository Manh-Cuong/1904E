<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    cú pháp:
    mktime(hour, minute,second,month,day,year)
    hàm nãy sẽ tạo ra time ở dạng linux timestamp

    => Để chuyển thời gian dạng linux về dạng time đọc được thì sẽ
    sử dụng date("định dạng time", "thời gian linux");

</pre>
<?php
$time1 =mktime(12,12,2,2,1,1997);
echo "<br> timel: ".$time1;
$human_time=date("Y-m-d H:i:s",$time1);
echo "<br> chuyển thời gian linux về thời gian đọc được ". $human_time;

//hàm strtotime(time,now);
//hàm chuyển thời gian đọc được về dạng time linux

echo "<br> Chuyển thời gian người đọc về lại dạng linux timestamp ".strtotime($human_time)
?>
</body>
</html>