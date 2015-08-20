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
//var_dump($result);
echo "<table style='width: 100%'>";
echo "<tr><td>序号</td><td>省份</td><td>姓名</td><td>电话</td></tr>";
$index = 1;
while($row = mysql_fetch_object($result))
{
//    echo "while";
    $sf = $row->city;
    $shengfen = '无';
    if(isset($sf) && $sf== 'gd'){
        $shengfen = "广东省";
    }
    if(isset($sf) && $sf== 'hn'){
        $shengfen = "海南省";
    }
    if(isset($sf) && $sf== 'gx'){
        $shengfen = "广西省";
    }
    if(isset($sf) && $sf== 'fj'){
        $shengfen = "福建省";
    }
    $mingzi = "无";
    if(isset($row->name)){
        $mingzi = $row->name;
    }
    $dianhua = "无";
    if(isset($row->phone)){
        $dianhua = $row->phone;
    }else{
        continue;
    }
    echo "<tr><td>$index</td><td>$shengfen</td><td>$mingzi</td><td>$dianhua</td></tr>";
    $index++;
}
echo "</table>";
//echo"<br>OVer";
mysql_close($con);

?>
</body>