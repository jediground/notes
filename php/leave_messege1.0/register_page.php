<?php
/****************************************************
*Author:cuzval
*Date:2012-2-9
*Languae:PHP
****************************************************/
// 设置字符编码
header('Content-Type: text/html; charset=UTF8');

// 使用session前需开启
session_start(); 

//获得调用权限
define('INC_POWER',true);

// 引入公共文件（公共文件含核心函数库,包括alert_back()）
require dirname(__FILE__) . '/includes/common.inc.php';

if (isset($_POST['sub'])){
	// 引入注册页函数文件
	include ROOT_PATH . 'includes/register_page.func.php';
	
	// 先验证验证码  防止恶意提交
	check_verify_code($_POST['code'], $_SESSION['verify_code']);
	
	// 检查并接收数据
	$clean_info = array();
	
	// 检查并接收用户名
	$clean_info['username'] = check_username($_POST['username']);

	// 检查并接收密码
	$clean_info['password'] = check_password($_POST['username'], $_POST['password'], $_POST['confirm_pw']);
	
	// 检查并接收email
	$clean_info['email'] =check_email($_POST['email']);
	
	print_r($clean_info);
	
	// 验证通过，录入数据库
	include ROOT_PATH . 'includes/config.inc.php'; //打开数据库连接
	
}
?>
<script type="text/javascript">   
	function refresh(){
		var code = document.getElementById("code");
		code.src = "verify_code_img.php?TMD="+Math.random();
		code.style.cursor = 'pointer';
	}
</script>

	<form action="" method="post">
		 用 户 名 ： <input type="text" name="username" /><br />
		密　　码 ：<input type="password" name="password" /><br />
		确认密码：<input type="password" name="confirm_pw" /><br />
		电子邮件：<input type="text" name="email" /><br />
		验 证 码：<img src="verify_code_img.php" id="code" onclick="refresh();" /><br />
		<input type="text" name="code" ><br />
		<input type="submit" name="sub" value="注册" >
   </form>

