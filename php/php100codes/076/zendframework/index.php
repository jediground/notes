<?php

	error_reporting(E_ALL|E_STRICT);
	date_default_timezone_set('Asia/Shanghai');

	set_include_path('.' .PATH_SEPARATOR .'./library'.PATH_SEPARATOR .'./application/models/'.PATH_SEPARATOR . get_include_path());
	require_once "Zend/Loader/Autoloader.php";  //载入zend框架
	Zend_Loader_Autoloader::getInstance()->setFallbackAutoloader(true); //静态载入自动类文件
	$registry = Zend_Registry::getInstance();
	$view = new Zend_View();
	$view->setScriptPath('./application/views/scripts/');//设置模板显示路径
	$registry['view'] = $view;//注册View

	//配置数据库参数,并连接数据库
	$config=new Zend_Config_Ini('./application/config/config.ini',null, true);
	Zend_Registry::set('config',$config);
	$dbAdapter=Zend_Db::factory($config->general->db->adapter,$config->general->db->config->toArray());
	$dbAdapter->query('SET NAMES UTF8');
	Zend_Db_Table::setDefaultAdapter($dbAdapter);
	Zend_Registry::set('dbAdapter',$dbAdapter);


	//设置控制器
	$frontController =Zend_Controller_Front::getInstance();
	$frontController->setBaseUrl('/zendframework')//设置基本路径
					->setParam('noViewRenderer', true)
					->setControllerDirectory('./application/controllers')
					->throwExceptions(true)
					->dispatch();
