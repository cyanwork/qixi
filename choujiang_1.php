<?php
/**
 * Created by PhpStorm.
 * User: wanghuan
 * Date: 15/8/19
 * Time: 10:50
 */
//require_once('header.php');

?>

<html>
<head>
    <title>准备抽奖</title>
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
            background: url("images/bg_cj.jpg") no-repeat center center #333333;
            background-size: cover;
            opacity: 1;
            -webkit-transition: all 0.4s;
            transition: all 0.4s;
        }
        .button{
            position: absolute;
            text-align: center;
            top: 90%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 150px;
            height: 100px;
            background: saddlebrown;
        }

    </style>
</head>
<body>

<div class="start main-stage">
    <div class="button"></div>
</div>
<script type="application/javascript">

    $(".button").on('click touchend', function(e){
        e.preventDefault();
        var myDate = new Date();
        location.href="choujiang_2.php?from=index&timestamp=" + myDate.getTime();
    });

</script>
</body>
</html>
