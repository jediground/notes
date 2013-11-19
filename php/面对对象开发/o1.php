<?php
/*
 * Created on 2011-7-17
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?
class MyPc{
	var $key;
	public $name;
	function vod(){
		echo "PHP100ÊÓÆµ½Ì³Ì";
	}
}
$pc1=new MyPc();
$pc1->key="PHP";
echo $pc1->key."<br>";

$pc2=new MyPc();
$pc2->vod();

?>