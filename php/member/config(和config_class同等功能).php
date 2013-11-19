<?php
session_start();
//数据库链接
$conn=mysql_connect('localhost','root','');
mysql_select_db('member',$conn);

//定义常量
define(ALL_PS,"php100");

//有无权限查看内容的控制
function user_shell($uid,$shell,$m_id){
	$sql="select * from user_list where `uid`='$uid'";
	$query=mysql_query($sql);
	$us=is_array($row=mysql_fetch_array($query));
	$shell=$us ? $shell=md5($row[username].$row[password].ALL_PS):FALSE;
	if($shell)
	{
		if($row[m_id]<=$m_id){
		return $row;
		}else{
			echo "你权限不足";
			exit();
		}
	}else{
		echo "你无访问该页权限";
		exit();
	}
}

//登录超时的设置
function user_mktime($onlinetime){
	$new_time=mktime();
	echo $new_time-$onlinetime;
	if($new_time-$onlinetime>'1800'){
		echo "登录超时";
		session_destroy();
	}else{
		$_SESSION[times]=mktime();
	}
}



?>









