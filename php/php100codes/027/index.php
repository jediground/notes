<?php
  include("smarty_inc.php");
  //$name="php100中文站";
  
  $name[]=array("name"=>"新闻第一条","date"=>"2009-11-15");
  $name[]=array("name"=>"PHP100中文","date"=>"2009-11-15");
  $name[]=array("name"=>"免费视频教程","date"=>"2009-11-15");
  $name[]=array("name"=>"圣诞快乐","date"=>"2009-11-15");
  $name[]=array("name"=>"中国最好","date"=>"2009-11-15");
  $row=array("标题","作者","当前页面");
  
  $smarty->assign("title",$name);
  $smarty->assign("row",$row);
  $smarty->display("index.html");
?>
