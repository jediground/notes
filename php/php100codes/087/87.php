<?php

//初始化一个 cURL 对象
$curl = curl_init();

//设置你需要抓取的URL
curl_setopt($curl, CURLOPT_URL, "http://www.baidu.com");

//设置cURL 参数，要求结果保存到字符串中还是输出到屏幕上。
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

//运行cURL，请求网页
$data = curl_exec($curl);

//关闭URL请求
curl_close($curl);

/*
$user = "admin";
$pass = "admin100";
$curlPost = "user=$user&pass=$pass";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost/edu/login.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
$data = curl_exec($ch);
curl_close($ch);
*/
?>