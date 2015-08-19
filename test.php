<html>
<head>
    <title>七夕抽奖活动</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="就是这样吗？">

</head>
<body>

<?php

$con = mysql_connect("rdsp1e2zvi5og2cqgbqmw.mysql.rds.aliyuncs.com","rds_root","12345678");
echo "<br>1";
if (!$con)
{
    echo "<br>2";
    die('Could not connect: ' . mysql_error());
}
echo "<br>3";

mysql_select_db("qixi", $con);
echo "<br>4";
mysql_query("INSERT INTO users ('city', 'name', 'phone')
    VALUES ('12', '11', '32')");
echo "<br>5";
mysql_close($con);
echo "<br>6";

?>

</body>
</html>