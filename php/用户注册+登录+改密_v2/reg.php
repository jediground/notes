<?php

//注册检测
if (!isset ($_POST['submit'])) {
	exit ('非法访问!');
}

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
//注册信息判断
if (!preg_match('/^[\w\x80-\xff]{3,15}$/', $username)) {
	exit ('错误：用户名不符合规定。<a href="javascript:history.back(-1);">返回</a>');
}
if (strlen($password) < 6) {
	exit ('错误：密码长度不符合规定。<a href="javascript:history.back(-1);">返回</a>');
}
/**貌似这个邮箱检测的正则表达式有问题
if(!preg_match('/^w+([-+.]w+)*@w+([-.]w+)*.w+([-.]w+)*$/', $email)){
    exit('错误：电子邮箱格式错误。<a href="javascript:history.back(-1);">返回</a>');
}
*/

/**
*本段代码首先检测是否 POST 提交访问该页，接下来根据注册要求（用户名 3-15 字符长度，支持汉字、字母、数字及_；密码不得少于 6 *位）对用户提交的注册信息进行检测。在检测用户名和电子邮箱时采用了正则检测，关于正则表达式更多信息请参看《PHP 正则表达式》。
*/

//数据库交互
//包含数据库连接文件
include ('config.php');
//检测用户名是否已经存在
$check_query = mysql_query("SELECT * FROM `user_list` WHERE `username`='$username'");
$array = mysql_fetch_array($check_query);
if ($array) {
	echo '错误：用户名 ', $username, ' 已存在。<a href="javascript:history.back(-1);">返回</a>';
	exit;
}
/**
*写入数据
*该段代码首先检测用户名是否已经存在，如果存在则输出提示信息并立即终止程序执行。如果用户名不存在则把注册信息写入数据库，并输出对应**提示信息。
*/
$password = md5($password . ALL_PS);
$sql = "INSERT INTO `user_list` (id,username,password,email,regdate,question,answer) VALUES ('','$username','$password','$email',
now(),'$_POST[ques]','$_POST[ans]')";

if (mysql_query($sql, $conn)) {
	exit ('用户注册成功！点击此处 <a href="login.html">登录</a>');
} else {
	echo '抱歉！添加数据失败：', mysql_error(), '<br />';
	echo ' <a href="javascript:history.back(-1);">点击此处返回 重试</a>';
}
?>