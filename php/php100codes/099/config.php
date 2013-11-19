<?php

  mysql_connect("localhost","root","");
  mysql_select_db('db99');
  mysql_query("set names 'GBK'");

	define("ADD",1); //添加权限
	define("UPD",2); //更新权限
	define("LIS",4); //查看权限
	define("DEL",8); //删除权限
    
?>
