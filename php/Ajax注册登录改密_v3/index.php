<?php
include_once("config.php");
if($_POST['submit']){
	$username=$_POST[user];
	
	//检测用户名是否包含敏感字符
	$username=str_replace(" ","",str_replace("*","",str_replace("%","",$username)));
	if($_POST[user]!=$username){
		echo "<b style='color:red'>用户名包含敏感字符</b>";
		echo'<a href="javascript:history.back(-1);">返回</a>';
		exit;
		}
		
	//检测用户名是否已经存在
	$check_user = mysql_query("SELECT * FROM `user_list` WHERE `username`='$username'");
	$array = mysql_fetch_array($check_user);
	if ($array) {
		echo '错误：用户名 ', $username, ' 已存在！<a href="javascript:history.back(-1);">返回</a>';
		exit;
	}
	//检测邮箱是否符合规则
	$email=$_POST[email];
	$mode="/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/";
	if(!preg_match($mode,$email)) {
		echo "<font color=red>Email 地址无效</font><a href='javascript:history.back(-1);'>返回重试</a>";
		exit;
	}

	//检测邮箱是否已经存在
	$check_email = mysql_query("SELECT * FROM `user_list` WHERE `email`='$email'");
	$array = mysql_fetch_array($check_email);
	if ($array) {
		echo '错误:邮箱 ', $email, ' 已存在！<a href="javascript:history.back(-1);">返回</a>';
		exit;
	}
	
	//检查无误写入数据
	$pw=md5($_POST[password].ALL_PS);
	
	$sql="INSERT INTO `user_list` (`id`, `username`, `password`, `email`, `regdate`) VALUES ('','$username', '$pw', '$email',now())";
	$query=mysql_query($sql);

	if($query){

		echo '<script language="javascript">window.location.href="reg_done.php"</script>';
		}else{
				echo '抱歉！添加数据失败：<br />';
				echo ' <a href="javascript:history.back(-1);">点击此处返回重试</a>';

		}
}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="basic.css" />
<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript" src="ctrl.js"></script>
<title>新用户注册</title>
</head>

<body>
	<div id="reg">
		<form name="regFm" action="" method="post" onSubmit="return InputCheck(this)">
			<ul id="top">
				<li id="left">立即注册</li><li id="right"><a href="login.php">已有帐号？现在登录！</a></li>	
			</ul>
			<br />
			<ul class="tb">
				<li class="left"><em>*</em><label for="user">用户名:</label></li><li class="center"><input type="text" name="user" id="user" onblur="checkName()" onfocus="alertName()" /></li><li class="right"><span id="check_name"></span></li>	
			</ul>
			
			<ul class="tb">
				<li class="left"><em>*</em><label for="pw">密码:</label></li><li class="center"><input type="password" name="password" id="pw" onblur="checkPw()" onfocus="alertPw()" /></li><li class="right"><span id="check_pw"></span></li>	
			</ul>

			<ul class="tb">
				<li class="left"><em>*</em><label for="repw">确认密码:</label></li><li class="center"><input type="password" name="repassword" id="repw" onblur="checkRePw()" onfocus="alertRepw()" /></li><li class="right"><span id="check_reRw"></span></li>	
			</ul>
			
			<ul class="tb">
				<li class="left"><em>*</em><label for="email">Email:</label></li><li class="center"><input type="text" name="email" id="email" onblur="checkEmail()" onfocus=alertemail() /></li><li class="right"><span id="check_email"></span></li>	
			</ul>
			<ul class="tb" id="buttom">
				<li class="left"></li><li class="center"><button type="submit" name="submit" value="ok">提交</button></li><li class="right"></li>	
			</ul>			
				
		</form>
	</div>
</body>
</html>
<?php
}
?>