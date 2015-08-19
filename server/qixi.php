<?php
/**
 * Created by PhpStorm.
 * User: wanghuan
 * Date: 15/8/19
 * Time: 10:27
 */

$phone = $_GET['phone'];

if(isset($phone)){
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
    $i = 0;
    while($row = mysql_fetch_array($result))
    {
        $i++;
    }
    if($i < 6){
        $rand = rand(1,1000);
//        echo "rand:".$rand;
        if($rand == 9){
            mysql_query("insert into zhongjiang (zhong) values ('$phone')");
            mysql_close($con);
            echo "<script>location.href='result_good.php'";
        }else{
            mysql_close($con);
            echo "<script>location.href='result_bad.php'";
        }

    }else{
        mysql_close($con);
        echo "<script>location.href='result_bad.php'";
    }

//echo "<br>5";


}