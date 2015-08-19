<?php
/**
 * Created by PhpStorm.
 * User: wanghuan
 * Date: 15/8/19
 * Time: 10:50
 */
$from = $_GET['from'];
$timestamp = $_GET['timestamp'];
//1439955648399
//1439955648
if(!isset($from) || !isset($timestamp)){
    $url="index.html";
    header('Location:'.$url);
}else{
    $local_timestamp = time()*1000; //1439955648
//    echo "local_timestamp:".$local_timestamp;
    if(($local_timestamp - $timestamp) > 15000){
        $url="index.html";
        header('Location:'.$url);
    }
}