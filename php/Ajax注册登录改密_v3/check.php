<?php
include_once("config.php");
//==============================检查用户名
if($_GET[id]){
	$user=str_replace(" ","",str_replace("*","",str_replace("%","",$_GET[id])));
	
	if($_GET[id]!=$user){
		echo "<b style='color:red'>用户名包含敏感字符</b>";
		exit;
		}
		
	$mode="/^[0-9a-z_]{3,16}+$/";
	if(!preg_match($mode,$user)){
		echo"<b style='color:red'>用户名只能是数字，字母，下划线！</b>";
		exit;
	}	
		
		
	// 检查用户名位数
	if(mb_strlen($user,'utf-8') < 6){
		echo "<b style='color:red'>用户名长度不能低于6个字符</b>";
		}else{
//			sleep(1);//等待执行mysql语句
			$sql="SELECT * FROM `user_list` where `username`='$user'";
			$q=@mysql_query($sql);
			$row = @mysql_num_rows($q);//行数
			if($row == 0){
				echo "<img src='./images/check_right.gif' />";
			
			}else{
					echo "<b style='color:red'>用户名已经存在！</b>";
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
					echo "<b style='color:red'>邮箱名已经存在！</b>";
				}else{
						echo "<img src='./images/check_right.gif' />";
				}
}

}






?>