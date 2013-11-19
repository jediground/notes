<?php
/****************************************************
*Author:cuzval
*Date:2012-2-9
*Languae:PHP
****************************************************/
// 防止恶意调用
if (!defined('INC_POWER')) {
	exit('Access Defined!');
}

//设置字符集编码
header('Content-Type: text/html; charset=utf-8');

// 获得根目录路径
 define('ROOT_PATH', substr(dirname(__FILE__), 0 , -8));
// echo ROOT_PATH . 'common.inc.php';

// 引入核心函数库
require ROOT_PATH.'includes/global.func.php';
 
//拒绝PHP低版本
if (PHP_VERSION < '4.1.0') {
	exit('Version is to Low!');
}

 //创建一个自动转义状态的常量
define('MQG',get_magic_quotes_gpc());

 
?>