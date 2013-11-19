<?php

  $db = sqlite_open("php100.db",0666,$sqlite_error);

  if($_POST[submit]){

  	$sql="INSERT INTO test (id, content, time) VALUES (NULL,'$_POST[content]',$_POST[time])";
  	sqlite_exec($db,$sql);

  	//echo sqlite_last_insert_rowid($db);

  }


  $sql = "select * from test order by id desc";
  $query=sqlite_query($db,$sql);
  while($row = sqlite_fetch_array($query)){
  	echo "标题：$row[content] - 日期 $row[time]<hr size=1>";
  }



?>
<LINK href="common.css" type=text/css rel=stylesheet>

  <form action="" method="post">
  标题：<input type="text" size="40" name="content" style="height:23px" /><br>
  年份：<input type="text" name="time" style="height:23px" />
  <input type="submit" name="submit" value="发布内容"/>
  </form>