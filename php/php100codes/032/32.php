<?php
session_start();
if($_GET[out]){
unset($_SESSION[id]);
setcookie($_SESSION[pass]);

}


if($_POST[name]&& $_POST[password]){
$_SESSION[id]=$_POST[name];
$_SESSION[pass]=$_POST[password];

}


if($_SESSION[id]&&$_SESSION[pass]){
echo "登陆成功！<br>".$_SESSION[id]."<br>密码：".$_SESSION[pass];
}

echo "<br><a href='32.php?out=out'>退出</a>";

?>
<form action="" method="post">
  <table width="282" border="0" align="center" cellpadding="1" cellspacing="1">
    <tr>
      <td width="93" bordercolor="#6699cc" bgcolor="#6699cc">用户名：</td>
      <td width="172" bordercolor="#6699cc" bgcolor="#6699cc"><label>
        <input type="name" name="name" />
      </label></td>
    </tr>
    <tr>
      <td bordercolor="#6699cc" bgcolor="#6699cc">密码：</td>
      <td bordercolor="#6699cc" bgcolor="#6699cc"><label>
        <input type="password" name="password" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2" bordercolor="#6699cc" bgcolor="#6699cc"><label>
        <input type="submit" name="Submit" value="提交" />
      </label></td>
    </tr>
  </table>
</form>
