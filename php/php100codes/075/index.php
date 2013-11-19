<?php

	error_reporting(E_ALL|E_STRICT); //在开启错误报告

	date_default_timezone_set('Asia/Shanghai'); //配置地区

	set_include_path('.' .PATH_SEPARATOR .'./library'.PATH_SEPARATOR .'./application/models/'.PATH_SEPARATOR . get_include_path());  //配置环境路径

//	require_once 'Zend/Loader.php';
//	Zend_Loader::registerAutoload();//设置Zend Framework 自动载入类文件

	require_once "Zend/Loader/Autoloader.php";  //载入zend框架
	Zend_Loader_Autoloader::getInstance()->setFallbackAutoloader(true); //静态载入自动类文件

	$registry = Zend_Registry::getInstance(); //静态获得实例
	$view = new Zend_View(); //实例化zend 模板
	$view->setScriptPath('./application/views/scripts/');//设置模板显示路径
	$registry['view'] = $view;//注册View

	//设置控制器
	$frontController =Zend_Controller_Front::getInstance();

	$frontController->setBaseUrl('/zendframework')//设置基本路径
					->setParam('noViewRenderer', true)
					->setControllerDirectory('./application/controllers')
					->throwExceptions(true)
					->dispatch();
?>