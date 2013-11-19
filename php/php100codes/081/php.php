<?php


   include_once("adodb5/adodb.inc.php");
 
  /* $db = NewADOConnection('mysql://root:@localhost/upload');
   $sql="SELECT * FROM `pic`";

   $db->SetFetchMode(ADODB_FETCH_ASSOC);

   //mysql_fetch_array()
   $sr1 = $db->Execute($sql);

   print_r($sr1->fields);
*/

/*
   $db = NewADOConnection('mysql');
   $db->PConnect("localhost", "root", "", "upload");
   $sql="SELECT * FROM `pic`";
   $rs2=$db->Execute($sql);

  while($row=$rs2->FetchNextObject()){
    echo $row->NAME;
  }

*/

 
 include_once("adodb5/adodb-pager.inc.php");

	session_start();

   $db = NewADOConnection('mysql');
   $db->Connect("localhost", "root", "", "upload");

   $db->Execute("set names 'GBK'");


   $sql="SELECT * FROM `pic`";
   $pager=new ADODB_Pager($db,$sql);
   $pager->Render(2);
   

/*
include_once("adodb5/tohtml.inc.php");

   $db = NewADOConnection('mysql');
   $db->Connect("localhost", "root", "", "upload");
   $sql="SELECT * FROM `pic`";
   $rs2=$db->Execute($sql);

   echo rs2html($rs2);
*/


?>