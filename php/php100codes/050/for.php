<?php
if($_GET[id]){
	sleep(1);
 $conn=mysql_connect('localhost','root','');
 mysql_select_db('test',$conn);

 $sql="SELECT * FROM `user` where `name`='$_GET[id]'";
 $q=mysql_query($sql);

 if(is_array(mysql_fetch_row($q))){
 	echo "<font color=red>用户名已经存在</font>";
 }else
 {
   echo "<font color=green>可以使用</font>";
 }
}


?>