<?php
include_once("config.php");
//==============================检查用户名
if($_GET[id]){
	if(strlen($_GET[id])<6){
		echo "<font color=red>用户名长度不能低于6个字符</font>";
		}else{
//			sleep(1);//等待执行mysql语句
			$sql="SELECT * FROM `user_list` where `username`='$_GET[id]'";
			$q=@mysql_query($sql);

			if(is_array(mysql_fetch_row($q))){
				echo "<font color=red>用户名已经存在！</font>";
			}else{
					echo "<img src='./images/check_right.gif' />";
			}
		}
}

//==============================检查邮箱名
if($_GET[em]){
	$mode="/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/";

	if(!preg_match($mode,$_GET[em])) {
		echo "<font color=red>Email 地址无效</font>";
	}else{
//		sleep(1);//等待执行mysql语句
		$sql="SELECT * FROM `user_list` where `email`='$_GET[em]'";
		$q=@mysql_query($sql);
		if(is_array(mysql_fetch_row($q))){
					echo "<font color=red>邮箱名已经存在！</font>";
				}else{
						echo "<img src='./images/check_right.gif' />";
				}
}

}






?>