<?php
class IndexController extends Zend_Controller_Action
{
	function init()
    {
        $this->registry = Zend_Registry::getInstance();
        $this->view = $this->registry['view'];
        $this->view->baseUrl = $this->_request->getBaseUrl();

    }

	function indexAction()
    {
    	$message=new message();//实例化数据库类

        //获取数据库内容
        $this->view->messages=$message->fetchAll()->toArray();

		echo $this->view->render('index.phtml');//显示模版
    }


     	function addAction(){
    	//如果是POST过来的值.就增加.否则就显示增加页面
    	if(strtolower($_SERVER['REQUEST_METHOD'])=='post'){

			$content=$this->_request->getPost('content');
			$title=$this->_request->getPost('title');

			$message=new Message();
			$data=array(
					'content'=>$content,
					'title'=>$title
			);
			$message->insert($data);
			unset($data);
			echo '您增加数据成功!请您<a href="'.$this->view->baseUrl.'/index/index/">返回</a>';

    	}else{
    		echo $this->view->render('add.phtml');//显示增加模版
    	}
    }




}


