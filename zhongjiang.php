<html>
<head>
    <title>中奖者</title>
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

$result = mysql_query("select * from zhongjiang;");
//var_dump($result);
echo "<h1>中奖用户</h1><hr>";
echo "<table style='width: 100%'>";
echo "<tr><td>序号</td><td>电话</td></tr>";
$index = 1;
while($row = mysql_fetch_object($result))
{


    if(isset($row->zhong)){
        $dianhua = $row->zhong;
    }else{
        continue;
    }
    echo "<tr><td>$index</td><td>$dianhua</td></tr>";
    $index++;
}
echo "</table>";
//echo"<br>OVer";
mysql_close($con);

?>
</body>