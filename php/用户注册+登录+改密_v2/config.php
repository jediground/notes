<?php
 session_start();

$conn=@mysql_connect('localhost','root','') or die('MYsql连接失败');
$sql=mysql_select_db('double',$conn) or die ('连接数据库失败');
mysql_query("set names 'GBK'");

//定义常量
define(ALL_PS,'river');

//判断权限
function user_shell($id,$shell){
	$sql="SELECT * FROM `user_list` WHERE `id`='$id'";
	$query=mysql_query($sql);
	$us=is_array($row=mysql_fetch_array($query));
	$shell=$us ? $shell==md5($row[username].$row[password].ALL_PS):FALSE;

	if($shell){
		return $row;
	}else{
		exit('你无权限访问该页');
	}
}


?>
