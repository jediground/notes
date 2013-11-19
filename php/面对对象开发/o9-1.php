<?php
/*
 * Created on 2011-7-17
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?
class my{
	public $name="我的类";
	function __tostring(){		// __tostring，可以直接打印句柄
		return  $this->name."这是一个空类";
	}

	function __call($n,$v){		//__call($funname,$arr_value)，调用一些不存在的对象方法的异常处理
		echo "错误的方法为:".$n;
		echo "错误的值".print_r($v);
	}

	function __destruct(){
		echo"<br>清理一个对象";		//清理错误信息
	}

	function __clone(){			// 通过克隆的方式我们可以在内存中生成两个一样的对象或升级原对象。
		$this->name="你的类";
	}
}

$p=new my();
$b=clone $p;

echo $p->name."<br>";
echo $b->name;










?>