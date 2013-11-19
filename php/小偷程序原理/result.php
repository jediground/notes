<?php
/*
 * Created on 2008-9-7
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */


$url = "http://weather.tq121.com.cn/detail.php?city=$_GET[city]"; //Ä¿±êÕ¾
$fp = @fopen($url, "r") or die("³¬Ê±");
$fcontents = file_get_contents($url);

eregi("<img src=\"images/20080821.gif\" width=\"480\" height=\"55\" border=\"0\"></a></td>(.*)<td width=\"21\" valign=\"top\">&nbsp;</td>", $fcontents, $regs);

$regs[1]=str_replace("src=\"../images/","src=\"http://weather.tq121.com.cn/images/",$regs[1]);

echo  $regs[1];



?>
