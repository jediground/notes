<?php
/*
 * Created on 2011-7-19
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?
// 生成随机数
//echo rand(2,29)."<br>";
//echo dechex(45)."<br>";


echo dechex(rand(1,15)."<br>");

for($i=0;$i<4;$i++){
	$rand.=dechex(rand(1,15));
}

echo $rand;






?>