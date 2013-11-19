<?php
include_once 'smarty_inc.php';

$arr = array(3,2,5,6,3,7,3,4);
$smarty->assign('arr_loop',$arr);

$arr_ = array('Baidu'=>'LiYanHong','Facebook'=>'Mark','Google'=>'Page');
$smarty->assign('arr_loop_',$arr_);



$smarty->display('using.html');
?>