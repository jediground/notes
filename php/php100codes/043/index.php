<?php
/*
 * php100-43视频教程
 * MVC的使用，ThinkPHP开发包的引用,TP模版
 */

 define('THINK_PATH','ThinkPHP/');
 define('APP_NAME','php100-43');
 define('APP_PATH','.');

 require(THINK_PATH."/ThinkPHP.php");

 $App = new App();
 $App->run();
?>
