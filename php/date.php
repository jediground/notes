<?php
// 获取当前时时间戳mktime(); time();
echo mktime() . '<hr />';
echo time(). '<hr />';
echo date('Y-m-d,H:i:s',1128316568) . '<hr />';

$now = strtotime('now');
echo '当前时间是：' . date('Y-m-d,h:i:s',$now) . '<hr />';

echo date('Y-m-d,h:i:s'). '<hr />';

$time = getdate();
print_r($time). '<hr />';
echo '<hr />';


echo date_default_timezone_get() . '<hr />';
date_default_timezone_set('Asia/Shanghai');
echo date_default_timezone_get() . '<hr />';
echo date('Y-m-d,H：m:s',$now) . '<hr />';













?>