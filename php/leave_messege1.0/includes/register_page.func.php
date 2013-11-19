<?php
/****************************************************
*Author:cuzval
*Date:2012-2-9
*Languae:PHP
****************************************************/
//防止恶意调用
if (!defined('INC_POWER')) {
	exit('Access Defined!');
}
// 该函数存在于核心函数库global.inc.php中,调用它的页面register_page.php需引入公共文件common.inc.php,公共文件已经引入了核心函数库
if (!function_exists('alert_back')) {
	exit('alert_back()函数不存在，请检查!');
}

// 该函数存在于核心函数库global.inc.php中,调用它的页面register_page.php需引入公共文件common.inc.php,公共文件已经引入了核心函数库
if (!function_exists('mysql_string')) {
	exit('mysql_string()函数不存在，请检查!');
}

/**
 * @param sting $session_code SESSION传过来的验证码
 * @param string $post_code 用户输入的验证码
 */
function check_verify_code($session_code,$post_code){
	if ($session_code != $post_code){
		alert_back('验证码错误');	
	}
}
/**
 * check_username()检查用户名是否符合要求
 * @param $receive_username  接收来的用户名，可能包含不合法信息（必填）
 * @param int [$min_digit] 用户名最小位数  （选填）
 * @param int [$max_digit] 用户名最大位数（选填）
 * @return string  合格的用户名格式
 */
function check_username($receive_username ,$min_digit = 6, $max_digit = 18){
	
	// 去除两端空格，特殊字符
	$receive_username = htmlspecialchars(trim($receive_username)); 
	
	// 判断长度
	$_username_len = mb_strlen($receive_username,'utf-8');
	if ($_username_len >$max_digit || $_username_len < $min_digit){
		alert_back('用户名不能少于'. $min_digit . '位或者大于'. $max_digit .'位');
	}
	
	// 抑制敏感字符
	$char_pattern = '/[<>\'\"\ \　]/'; //有问题。"中文怎么了"不行...
	if (preg_match($char_pattern,$receive_username)) {
		alert_back('用户名不得包含敏感字符');
	}
	
	// 转义字符  = addslashes()
//	$receive_username = mysql_real_escape_string($receive_username);
	
	// 转义返回
	return mysql_string($receive_username);
}

/**
 * check_password 检查密码是否符合要求
 * @@param string $username 用户名
 * @param string $password 第一次输入的密码
 * @param string $confirm_pw 确认密码
 * @param int [$min_digit] 密码最小位数
 * @param int [$max_digit] 密码最大位数
 * @return password  sha1加密后的密码
 */
function check_password($username, $password , $confirm_pw, $min_digit = 6, $max_digit = 25){
	if (strlen($password) < $min_digit){
		alert_back('密码长度不能小于'. $min_digit . '位数！');
	}
	
	if (strlen($password) > $max_digit){
		alert_back('密码长度不能大于'. $min_digit . '位数！');
	}
	
	if ($confirm_pw != $password){
		alert_back('两次输入密码不一致！');
	}
	
	if ($password == $username){
		alert_back('用户名和密码不能一样！！');
	}
	
	// 加密返回
	return mysql_string(sha1($password));
}

/**
 * check_email 返回合格的邮箱
 * @param string $email 
 * @return email
 */
function check_email($email){
	$mode = '/^([\w\.\-]{2,255})@([a-zA-Z0-9\-]{2,255})((\.[a-zA-Z0-9]+))+$/';
	if (!preg_match($mode,$email)){
		alert_back('请输入正确的电子邮箱！');
	}
	
	return mysql_string($email);
}












?>