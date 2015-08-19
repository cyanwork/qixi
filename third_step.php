<?php
require_once('header.php');
?>
<html>
<head>
    <title>抽奖</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="scripts/main.js"></script>
    <style type="text/css">

        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background: #000;
        }
        .main-stage {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: url("images/step12.png") no-repeat center center #333333;
            background-size: cover;
            opacity: 1;
            -webkit-transition: all 0.4s;
            transition: all 0.4s;
        }
        .button{
            position: absolute;
            text-align: center;
            bottom: 0px;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 250px;
            height: 150px;
            background: transparent;
        }

    </style>
</head>
<body>

<div class="start main-stage">
    <div class="button"></div>
</div>
<audio id="bgm" src="./images/Honey.mp3" loop=1 autoplay=1></audio>
<script type="application/javascript">

    $(".button").on('click touchend', function(e){
        e.preventDefault();


        var myDate = new Date();
        location.href="result_bad.php?from=index&timestamp=" + myDate.getTime();
    });

</script>
</body>
</html>
<?php

    $city = $_POST['sf'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $name_code = urlencode($name);

//    echo "<br>city:".$city;
//echo "<br>name:".$name;
//echo "<br>name:".$name_code;
//echo "<br>phone:".$phone; $.get(url,data,callback,type)

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

mysql_query("insert into users (city,name,phone) values ('$city','$name','$phone')");
//echo "<br>5";
    mysql_close($con);
//echo "<br>6";
?>