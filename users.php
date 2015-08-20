<html>
<head>
    <title>你的爱有多热？-雪佛兰七夕有礼</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: wanghuan
 * Date: 15/8/20
 * Time: 19:53
 */

$con = mysql_connect("rdsp1e2zvi5og2cqgbqmw.mysql.rds.aliyuncs.com","rds_root","12345678");
//echo "<br>1";
if (!$con)
{
//        echo "<br>2";
    die('Could not connect: ' . mysql_error());
}
//echo "<br>3";

mysql_select_db("qixi", $con);
mysql_query("set names utf8;");
//echo "<br>4";

$result = mysql_query("select * from users;");
echo "<tr><td>省份</td><td>姓名</td><td>电话</td></tr>";
while($row = mysql_fetch_object($result))
{
    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
}

mysql_close($con);

?>
</body>