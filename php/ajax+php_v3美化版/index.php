<?php
include_once("config.php");
if($_POST[submit]){
	$username = htmlspecialchars($_POST['username']);
	//检测用户名是否已经存在
	$check_user = mysql_query("SELECT * FROM `user_list` WHERE `username`='$username'");
	$array = mysql_fetch_array($check_user);
	if ($array) {
		echo '错误：用户名 ', $username, ' 已存在！<a href="javascript:history.back(-1);">返回</a>';
		exit;
	}
	
	//检测邮箱是否已经存在
	$email=$_POST[email];
	$check_email = mysql_query("SELECT * FROM `user_list` WHERE `email`='$email'");
	$array = mysql_fetch_array($check_email);
	if ($array) {
		echo '错误:邮箱 ', $email, ' 已存在！<a href="javascript:history.back(-1);">返回</a>';
		exit;
	}

	$pw=md5('$_POST[password].ALL_PS');

	$sql="INSERT INTO `user_list` (`id`, `username`, `password`, `email`, `regdate`, `question`, `answer`) VALUES ('','$username', '$pw', '$email', 'now()', '$POST[ques]', '$_POST[ans]')";
	$query=mysql_query($sql);

	if($query){
		exit ('用户注册成功！点击此处 <a href="login.html">登录</a>');
		}else{
				echo '抱歉！添加数据失败：<br />';
				echo ' <a href="javascript:history.back(-1);">点击此处返回重试</a>';

		}
}else{
?>
<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript" src="ctrl.js"></script>
<link rel="stylesheet" type="text/css" href="class.css" />
	
<fieldset>	
<legend>新用户注册</legend>

	<form name="regFm" action="" method="post" onSubmit="return InputCheck(this)">
<ul>	
	
	<label for="user">用 户 名：</label>
	<em>*</em>
	<input type="text" name="user" id="user" onblur="checkName()" onfocus="alertName()"/>
	<span id="check_name"></span><br /><br />
</ul>
<ul>
	
	<label for="pw">密　　码：</label>
	<em>*</em>
	<input type="password" name="password" id="pw" onblur="checkPw()"/>
	<span id="check_pw"></span><br /><br />
</ul>	
<ul>
	
	<label for="repw">确认密码：</label>
	<em>*</em>
	<input type="password" name="repassword" id="repw" onblur="checkRePw()"/>
	<span id="check_reRw"></span><br /><br />
</ul>	
<ul>

	<label for="email">Email：</label>
	<em>*</em>
	<input type="text" name="email" id="email" onblur="checkEmail()"/>
	<span id="check_email"></span><br /><br />
</ul>
<ul>
	
	<label id="tx">请选择密保问题？</label><em>*</em><br /><br />

	<select name="ques">
	<option value="你父亲的生日？">你父亲的生日？</option>
	<option value="你母亲的生日？">你母亲的生日？</option>
	<option value="你最爱的人的生日？" selected>你最爱的人的生日？</option>
	<option value="你的第一个手机号码？">你的第一个手机号码？</option>
	<option value="你的驾照后六位数字？">你的驾照后六位数字？</option>
	<option value="你的初中老师姓名？">你的初中老师姓名？</option>
	</select>
	<br />
</ul>	
<ul>
	
	<label for="ans">你的答案？</label><em>*</em>	<br /><br />
	<input type="text" name="ans" id="ans" style="width:260px" /><br /><br />
</ul>

	<input type="submit" name="submit" value="确认注册" style="width:70px">

  </form>
</fieldset>

<?php
}
?>


















