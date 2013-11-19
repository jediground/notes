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

$conn = mysql_connect('localhost', 'root', '') or die('Mysql连接失败' . mysql_error());
mysql_select_db('phplee', $conn) or die('Mysql连接失败' . mysql_error());
mysql_query('SET NAMES UTF8');


?>