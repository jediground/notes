<?php
/*           self final stract const
 * Created on 2011-7-17
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?
final class MyPc{
	public $name='我的电脑';
	final function power(){
		echo $this->name."，电脑打开中。。。。。";
	}
}

class My {

}
$p=new MyPc();
$p->power();






?>