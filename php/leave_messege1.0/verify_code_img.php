<?php 


//定义个常量，用来授权调用includes里面的文件
define('INC_POWER',true);

// 开启session
session_start();

// 引入公共文件
require dirname(__FILE__) . '/includes/common.inc.php';

// 生成验证码(公共文件引入了包含verify_code()函数的核心函数库)
verify_code(); // 用这个函数前需要开启session





?>

