<?php/*
if($id=$_GET[id]){
	for($i=1;$i<10;$i++){
		echo $i."$id<br />";
		sleep(1);
	}
	exit();
}*/
?>
<?
if($_GET[id]){
	sleep(1);
	$conn=mysql_connect('localhost','root','');
	mysql_select_db('test',$conn);

	$sql="SELECT * FROM `user` where `name`='$_GET[id]'";
	$p=mysql_query($sql);

	if(is_array(mysql_fetch_row($p))){
		echo "用户名已经存在";
	}else{
		echo "可以使用";
	}
}




?>