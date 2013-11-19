<?php
include_once ('global.php');
if(empty($_GET[id])) exit();

$sql = "SELECT * FROM `p_newsclass` where f_id=0 order by id DESC";
$query = $db->query($sql);
while ($row_class = $db->fetch_array($query)) {
	$sm_class[] = array (
		"name" => $row_class[name],
		"id" => $row_class[id]
	);
}

$smarty->assign("sm_class", $sm_class); //导航引入

//==============

$sql = "SELECT * FROM p_config";
$query = $db->query($sql);
while ($row_config = $db->fetch_array($query)) {
	$sm_config[] = $row_config[values];
}
$smarty->assign("sm_config", $sm_config); //配置引入




	$sql="select * from p_newsbase as a, p_newscontent as b where a.id=b.nid and a.id='$_GET[id]'";
    $query=mysql_query($sql);
    $row_news=mysql_fetch_array($query);


$smarty->assign("row_news", $row_news); //配置引入

$smarty->display("view.htm");


?>
