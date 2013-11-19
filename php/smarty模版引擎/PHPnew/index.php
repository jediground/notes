<?php

include_once './common/smarty_inc.php';

$conn = mysql_connect('localhost', 'root', '') or die(mysql_error());;
mysql_select_db('php100', $conn) or die(mysql_error());
mysql_query('set names gbk');

if(isset($_POST['update'])){
	unset($_POST['update']);
//	print_r($_POST);
	foreach($_POST as $name=>$values){
		echo $name . ':';
		echo $values . "<hr />";
		mysql_query("update p_config set `values`='$values' where `name`='$name'");
	}
	echo 'done!';
}



$sql = "select * from `p_config`";
$query = mysql_query($sql);
while($row = mysql_fetch_array($query,MYSQL_ASSOC)){
	$row_arr[$row['name']] = $row['values'];
}
 
 $smarty->assign("row_arr",$row_arr);
 $smarty->display("index.html");
 

?>
