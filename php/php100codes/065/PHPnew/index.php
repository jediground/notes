<?php

include_once('global.php');

  $query=$db->query("SELECT * FROM `p_config`");
  $row=$db->fetch_array($query);

  $smarty->assign("row",$row[name]);
  $smarty->display("index.html");

?>
