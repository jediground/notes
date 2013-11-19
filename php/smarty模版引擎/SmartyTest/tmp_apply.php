<?php
// using smarty config file
include_once 'smarty_inc.php';

$arr = array('Baidu' => 'LiYanHongdasd', 'Facebook' => 'Mark', 'Google' => 'Page');
$smarty->assign('arr_', $arr );






$smarty->display('tmp_apply.html');
?>