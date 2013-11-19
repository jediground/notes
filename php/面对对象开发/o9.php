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
	function __tostring(){
		return  $this->name."这是一个空类";
	}

	function __call($n,$v){
		echo "错误的方法为:".$n;
		echo "错误的值".print_r($v);
	}
}

$p=new my();
$p->demo("第一",6);













?>