<?php
  include("smarty_inc.php");
  
  
/**********************************
$id=$_GET[id];
  $value=array(
  'a'=>'PHP',
  'b'=>'JAVA',
  'c'=>'C++'
  );

function insert_shijian(){
      return date("Y-m-d H:m:s");
}

  
  $smarty->assign('name',$value);
  $smarty->assign('id',$id);
  $smarty->display("index.html",$id);
  
  $smarty->clear_all_cache();
  $smarty->clear_cache('index.html',$id);
  
********************************************/
  
  include("mysql_inc.php");
  if($_GET[id]){
  $sql="SELECT * FROM `php100` where id=".$_GET[id];
  $query=$db->query($sql);
  $row=$db->fetch_row($query);
  $db->query('update php100 set hit=hit+1 where id='.$_GET[id]);
  }
  function insert_hit(){
  global $row;
  return $row[2];
  }
  
  $smarty->assign('row',$row);
  
  $smarty->display('index.html');

?>