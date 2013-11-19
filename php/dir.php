<?php
$path = 'D:\PHP2012\Apache2.2\htdocs\PHPLee\dir.php';
echo basename($path) . '<hr />';// 输出最后一项
echo dirname($path). '<hr />'; // 目录

$array_path = pathinfo($path); // 
print_r($array_path);

echo '<br />';

$path_ = './demo.php';
echo realpath($path_) . '<hr />';

$path__ = 'dir.php';
$flie = realpath($path__);
echo '当前文件大小：' . round(filesize($flie)/1024,2) . 'KB' . '<hr />';

$disk_d = 'd:';
echo 'D盘空闲空间：' . round(disk_free_space($disk_d)/1024/1024/1024,2) . 'GB' . '<hr />';
echo 'D盘总共空间：' . round(disk_total_space($disk_d)/1024/1024/1024,2) . 'GB' . '<hr />';

date_default_timezone_set('Asia/Shanghai'); // 设置时区
echo '本文件最后访问时间：' . date('Y-m-d,h:i:s',fileatime($flie)) . '<hr />';

//获取当前时间
$now = strtotime(now);
echo '当前时间是：' . date('Y-m-d,h:i:s',$now) . '<hr />';

$time = mktime(1,2,3,4,23,2012);
echo date('Y-m-d,h:i:s',$time);









?>