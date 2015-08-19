<html>
<head>
    <title>填写表单</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <form action="server/qixi.php" method="post">
        <input type="text" name="city"/><br>
        <input type="number" name="phone"/><br>
        <input type="submit" value="开始抽奖"/><br>
    </form>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: wanghuan
 * Date: 15/8/19
 * Time: 11:05
 */
require_once('header.php');