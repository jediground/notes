<?php
/*
 * Created on 2011-7-17
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?
function __autoload($name){
	include("$name.php");
}

$p=new demo();
$p->fun1();

$p=new test();
$p->fun2();





?>