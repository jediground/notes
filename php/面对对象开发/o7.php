<?php
/*
 *                              接口的应用
 * Created on 2011-7-17
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?
interface demo{
	const 	NAME="名称";
	function fun1();
	function fun2();
}

interface demo2{
	function fun3();
	function fun4();
}

interface demo3{
	const PLAY="播放";
	function fun5();
}

class MyPc implements demo,demo2{
	function fun1(){
		echo "+++++++++++++<br>";
	}
	function fun2(){
		echo "=============<br>";
	}
	function fun3(){
		echo "0000000000000<br>";
	}
	function fun4(){
		echo "9999999999999<br>";
	}
}

$p=new MyPc();

//单继承多接口



class MyPs extends MyPc implements demo3{
	function fun5(){
		echo "55555555555555<br>";
	}
}

$p=new MyPs();
$p->fun5();
$p->fun4();


echo MyPs::NAME;
echo MyPc::PLAY;

?>