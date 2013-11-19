<?php
/*
 * Created on 2011-7-17
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?
interface myusb{
	function type();
	function alert();
}

class zip implements myusb{
	function type(){
		echo "2.0";
	}

	function alert(){
		echo "正在检查U盘驱动";
	}
}

class mp3 implements myusb{
	function type(){
		echo "1.0";
	}

	function alert(){
		echo "正在检查mp3驱动";
	}
}

class mypc{
	function pcusb($what){
		$what->type()."<br>";
		$what->alert();
	}

}

$p=new mypc();
$zip=new zip();
$mp3=new mp3();

$p->pcusb($zip);
$p->pcusb($mp3)















?>