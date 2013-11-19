<?php
/*
 * PHP100Job v1.0
 * Programmer : Msn/QQ haowubai@hotmail.com (925939)
 * www.php100.com Develop a project PHP - MySQL - Apache
 * Window 2003 - Preferences - PHPeclipse - PHP - Code Templates
 */
 include("conn.php");

 include("head.php");
  $SQL="SELECT * FROM `message` order by id desc";
  $query=mysql_query($SQL);
  while($row=mysql_fetch_array($query)){
?>

<table width=500 border="0" cellpadding="5" cellspacing="1" bgcolor="#add3ef">
  <tr bgcolor="#eff3ff">
  <td>标题：<?=$row[title]?> 用户：<?=$row[user]?></td>
  </tr>
  <tr bgColor="#ffffff">
  <td>内容：<?
 echo htmtocode($row[content]);
   ?></td>
  </tr>
</table>
<?
  }
?>

