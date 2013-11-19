<?php

include_once("Smarty/Smarty.class.php"); //包含smarty类文件

	$smarty = new Smarty(); //建立smarty实例对象$smarty

	$smarty->config_dir="Smarty/Config_File.class.php";  // 目录变量
	
	$smarty->template_dir = "./templates"; //设置模板目录

	$smarty->compile_dir = "./templates_c"; //设置编译目录
	
	
	//----------------------------------------------------

	//配置缓存设置

	//----------------------------------------------------
	$smarty->cache_dir = "/caches";  // 设置缓存目录
	
	$smarty->caching = true;  // 开启缓存,为flase的时侯缓存无效
	
	$smarty->cache_lifetime = 60;  // 缓存时间
	

	//----------------------------------------------------

	//左右边界符，默认为{}，但实际应用当中容易与JavaScript相冲突

	//----------------------------------------------------

	$smarty->left_delimiter = "{";

	$smarty->right_delimiter = "}";




?>