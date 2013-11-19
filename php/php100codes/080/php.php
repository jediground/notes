<?php


   include_once("adodb5/adodb.inc.php");

   $db = NewADOConnection('mysql');
   $db->Connect("localhost", "root", "", "upload");

   $db->Execute("set names 'GBK'");



   $arr=array(
   "age"=>"10",
   "rm"=>"999",
   "php100"=>".com"
   );



   $db->AutoExecute("pic",$arr,"INSERT");



?>