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
            background: #000;
        }
        .bg {
            width: 100%;
            height: 100%;
            background: url("images/bg_cj.jpg")  no-repeat;
        }

    </style>
</head>
<body>

<div class="start bg">
    </div>
<script type="application/javascript">

    $(".start").on('click touchend', function(e){
        e.preventDefault();
        var myDate = new Date();
        location.href="choujiang_2.php?from=index&timestamp=" + myDate.getTime();
    });

</script>
</body>
</html>
