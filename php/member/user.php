<?php
include("config_class.php");
//	密码+常量==>进行md5加密=======保存密码

//判断密码正确与否
echo $rand;
if($_POST[submit]){
	$username=str_replace(" ","",$_POST[username]);
	$sql="select * from user_list where `username`='$username'";
	$query=mysql_query($sql);
	$us=is_array($row=mysql_fetch_array($query));
	$ps=$us ? md5($_POST[password].ALL_PS)==$row[password]:FALSE;

	if($ps){
		$_SESSION[uid]=$row[uid];
		$_SESSION[m_id]=$row[m_id];
		$_SESSION[username]=$row[username];
		$_SESSION[user_shell]=md5($row[username].$row[password].ALL_PS);
		$_SESSION[times]=mktime();
		echo "登录成功<br />";
		echo $_SESSION[username]."<br />";
//		echo $_SESSION[uid]."<br />";
//		echo $_SESSION[m_id]."<br />";

	}else{
		echo "用户名或者密码错误";
		session_destroy();
	}
}
?>

<link href="common.css" type=text/css rel=stylesheet" />

<form action="" method="post">
	<label for="username">会员名：</label>
	<input type="text" name="username" id="username" size=20 /><br />
	<label for="password">密　码：</label>
	<input type="password" name="password" id="password" size=21 /><br />
	<label for="code">验证码：</label>
	<input type="code" name="code" id="code" size=10 /><br />
	<img src="imgcode.php"><br /><br />
	<input type="submit" name="submit" value="LOGIN" />
</form>