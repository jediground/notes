<a href='?out=login'>退出</a>
<a href='?act=update'>更改密码</a>
<?php
  if($_GET[out]){
  	session_destroy();
    echo "<script language=\"javascript\">location.href='login.html';</script>";
  }

  if($_GET[act]){
    echo "<script language=\"javascript\">location.href='update.php';</script>";
  }

//echo $_SESSION[id]."<br />";
//echo $_SESSION[user_shell]."<br />";
//echo $_SESSION[username]."<br />";

//一下两句判断是否登录
include("config.php");
$arr=user_shell($_SESSION[id],$_SESSION[user_shell]);

echo$arr[username];
?>
权限内容gsfdffsd