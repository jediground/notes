<?php


/*
 * Created on 2011-7-17
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?
abstract class cl1{
	abstract function fun1();
	abstract function fun2();
	abstract function fun3();
	function ok(){

	}
}

class cl2 extends cl1{
	function fun1(){
		echo "第一个";
	}
	function fun2(){
		echo "第二个";
	}
	function fun3(){
		echo "第三个";
	}
}

$p=new cl2();
$p->fun2();


?>