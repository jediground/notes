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
	$row_arr[] = array(
		'name' => $row['name'],
		'values' => $row['values'],
		'remark' => $row['remark'],
	);
}
 
//print_r($row_arr);
 $smarty->assign("row_arr",$row_arr);




$news[] = array('name'=>'Face IPO','date'=>'2012-2-12');
$news[] = array('name'=>'QQ除名广东著名品牌','date'=>'2012-2-2');
$news[] = array('name'=>'杨致远辞职','date'=>'2012-2-11');
$news[] = array('name'=>'新浪股价大涨','date'=>'2012-2-2');
//print_r($news);

 $smarty->assign("news",$news);


 $smarty->display("forum.html");
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

?>
