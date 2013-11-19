<?
 include("conn.php");

 if($_POST['submit']){


  $sql="INSERT INTO message/*table name*/ (id,user,title,content,lastdate) " .
  		"values ('','$_POST[user]','$_POST[title]','$_POST[content]',now())";
  mysql_query($sql);
  echo "<script language=\"javascript\">alert('添加成功');history.go(-1)</script>";

 }
 include("head.php");
?>
<SCRIPT language=javascript>   //控制填写表单内容的
function CheckPost()
{
	if (myform.user.value=="")
	{
		alert("请填写用户名");
		myform.user.focus();
		return false;
	}
	if (myform.title.value.length<5)
	{
		alert("标题不能少于5个字符");
		myform.title.focus();
		return false;
	}
	if (myform.content.value=="")
	{
		alert("必须要填写留言内容");
		myform.content.focus();
		return false;
	}
}
</SCRIPT>

  <form action="add.php" method="post" name="myform" onsubmit="return CheckPost();">
  用户：<input type="text" size="10" name="user" /><br>
  标题：<input type="text" name="title" /><br/>
  内容：<textarea name="content"  cols="60" rows="9"></textarea><br/>

  <input type="submit" name="submit" value="发布留言"/>

  </form>
