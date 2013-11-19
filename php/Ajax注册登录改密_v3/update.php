
<?php
include("config.php");
$arr=user_shell($_SESSION[id],$_SESSION[user_shell]);

$sql="SELECT * FROM `user_list` WHERE id='$_SESSION[id]' ";
$query= mysql_query($sql);
$row=mysql_fetch_array($query);
	
if($_POST[submit]){
	$code=md5($_POST[code].ALL_PS);	
	
	//检查原始密码是否正确
	if($row[password]==$code){	
	}else{
		echo '原始密码错误 <a href="javascript:history.back(-1);">返回重试</a>';
		exit;
	}
	
	//提交邮箱不可为空
	if(strlen($_POST[email]) == 0){
		echo '邮箱不能为空！<a href="javascript:history.back(-1);">点此返回重试！</a>';
		exit;
	}
	
	//若密码正确，邮箱不变，更新数据
	$recode=md5($_POST[recode].ALL_PS);	
	if($row[email]==$_POST[email]){
		$sql="UPDATE `user_list` SET `password`='$recode' WHERE `id`='$_SESSION[id]' LIMIT 1 ";
		$query=mysql_query($sql);
			if($query){
				session_destroy();
				exit ('密码修改成功！<a href="login.php">点击此处重新登录</a>');
			}else{
					echo '抱歉！修改密码失败：', mysql_error(), '<br />';
					echo ' <a href="javascript:history.back(-1);">点击此处返回重试</a> ';
					exit;
			 }
	}
	/*以下前提是邮箱不为原始邮箱情况*/
	//检测邮箱是否符合规则	
	$email=$_POST[email];
	$mode="/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/";
	if(!preg_match($mode,$email)) {
		echo "<font color=red>Email 地址无效</font><a href='javascript:history.back(-1);'>点击此处返回重试</a>";
		exit;
	}
	
	//检测邮箱是否已经存在
	$check_email = mysql_query("SELECT * FROM `user_list` WHERE `email`='$email'");
	$array = mysql_fetch_array($check_email);
	if ($array) {
		echo '对不起，邮箱 ', $email, ' 已存在！<a href="javascript:history.back(-1);">点击此处返回重试</a>';
		exit;
	}
	
  //判断无误后写入数据
	$sql="UPDATE `user_list` SET `password`='$recode' , `email`='$email'  WHERE `id`='$_SESSION[id]' LIMIT 1 ";
	$query=mysql_query($sql);
		if($query){
			session_destroy();
			exit ('密码修改成功！<a href="login.php">点击此处重新登录</a>');
		}else{
				echo '抱歉！修改密码失败：', mysql_error(), '<br />';
				echo ' <a href="javascript:history.back(-1);">点击此处返回重试</a> ';
				exit;
		 }
			


}else{

?>

<!--js start-->
<script type="text/javascript">
<!--
function InputCheck(renew)
{
  if (renew.code.value == "")
  {
    alert("必须验证原始密码!");
    renew.code.focus();
    return (false);
  }
  if (renew.newcode.value.length<6)
  {
    alert("新密码长度不能少于6位!");
    renew.newcode.focus();
    return (false);
  }

  if (renew.code.value == renew.newcode.value)
  {
    alert("新密码不能和原始密码一样!");
    renew.newcode.focus();
    return (false);
  }

  if (renew.recode.value == "")
  {
    alert("请输入确认密码!");
    renew.recode.focus();
    return (false);
  }
  if (renew.recode.value != renew.newcode.value)
  {
    alert("两次密码不一致!");
    renew.recode.focus();
    return (false);
  }
}

//-->
</script>
<!--js end-->
<fieldset>
<legend>更改密码</legend>
<form name="renew" method="post" action="" onSubmit="return InputCheck(this)">
	
<p>原始密码：<em style="color:red">*</em>&nbsp;<input type="password" name="code" /></p>
<p>新的密码：<em style="color:red">*</em>&nbsp;<input type="password" name="newcode" /></p>
<p>确认密码：<em style="color:red">*</em>&nbsp;<input type="password" name="recode" /></p>
<p>Email：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" value="<?php echo $row[email] ?>" /></p>
<button type="submit" name="submit" value="ok">确认修改zenm</button><!--button标签必须设定值-->
<!--
<input type="submit" name="submit" value="确认修改" />
-->
</form>
</fieldset>

<?php
}
?>