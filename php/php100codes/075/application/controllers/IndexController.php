<?php
class IndexController extends Zend_Controller_Action
{	

	function init() //__construct 代替初始化函数
    {
        $this->registry = Zend_Registry::getInstance();
        $this->view = $this->registry['view'];
        $this->view->baseUrl = $this->_request->getBaseUrl();
            
    }
    
	/*
	 * Action(动作)!
	 */
	function indexAction() 
    { 
      	//这里给变量赋值,在index.html模板里显示
        $this->view->word = '测试一个内容';
		$this->view->php= array("php100视频教程","测试zf");

		echo $this->view->render('index.html');//显示模版  
    } 

	
	
}
	
	
	