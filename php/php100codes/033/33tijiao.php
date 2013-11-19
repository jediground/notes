<?php

session_start();

if($_POST[check]){
if($_POST[check]==$_SESSION[check_pic]){
echo "认证码正确！".$_SESSION[check_pic];
}
else {
echo "认证码错误！".$_SESSION[check_pic];
}
}

?>
<form action="" method="post">
<img src="33.php"><br>
<input type="text" name="check"><br>

<input type="submit" value="提交">
</form>

