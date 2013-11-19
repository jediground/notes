<?php
include("configphp");
$arr=user_shell($_SESSION[id],$_SESSION[user_shell]);

$sql="SELECT * FROM `user_list` WHERE id='$_SESSION[id]' ";
$query= mysql_query($sql);
$row=mysql_fetch_array($query);

if($_POST[ans]==$row[answer]){
	$_POST[code]=md5($_POST[code].ALL_PS);
	$sql="UPDATE `user_list` SET `password`='$_POST[code]' WHERE `user_list`.`id`='$_SESSION[id]' LIMIT 1 ";
	$query=mysql_query($sql);
	if($query){
		session_destroy();
		exit ('密码修改成功！<a href="login.html">点击此处重新登录</a>');
	}else{
		echo '抱歉！修改密码失败：', mysql_error(), '<br />';
		echo ' <a href="javascript:history.back(-1);">点击此处返回重试</a> ';
	}
}
?>


<!--js start-->
<script type="text/javascript">
<!--
function InputCheck(renew)
{
  if (renew.ans.value == "")
  {
    alert("验证答案不可为空!");
    renew.ans.focus();
    return (false);
  }
  if (renew.code.value == "")
  {
    alert("必须设定密码!");
    renew.password.focus();
    return (false);
  }
  if (renew.code.value.length<6)
  {
    alert("密码长度不能少于6位!");
    renew.password.focus();
    return (false);
  }
  if (renew.recode.value == "")
  {
    alert("请确认定密码!");
    renew.recode.focus();
    return (false);
  }
  if (renew.recode.value != renew.code.value)
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
<span>验证密保问题<span>:<?php echo $row[question];?>
<p>答案：<input type="text" name="ans" /></p>
<p>新的密码：<input type="password" name="code" /></p>
<p>确认密码：<input type="password" name="recode" /></p>
<input type="submit" name="submit" value="确认修改" />

</form>
</fieldset>



