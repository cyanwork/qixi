<?php
/**
 * Created by PhpStorm.
 * User: wanghuan
 * Date: 15/8/20
 * Time: 08:58
 */
$time = time()*1000;
echo "time:".$time;
echo "<SCRIPT LANGUAGE=\"JavaScript\">location.href='../result_good.php?from=index&timestamp=$time'</SCRIPT>";
