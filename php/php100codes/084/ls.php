<?php
  /*
  author： www.php100.com 视频教程源码 84讲
  */
 include_once("conn.php");


  if($_GET[id]<=60 && $_GET[id]){
  $con=file_get_contents("http://it.sohu.com/7/1002/17/column203661721_32".$_GET[id].".shtml");

  $preg = "#<h1>·<a href='(.*)' target='_blank'>(.*)</a><span>#iUs";

  preg_match_all($preg,$con,$arr);

   foreach($arr[1] as $id=>$v){

   $sql="INSERT INTO `tmp_url` (`id`, `title`, `url`) VALUES (NULL, '".$arr[2][$id]."', '".$v."');";
   mysql_query($sql);

     }
	 $_GET[id]++;
     echo "正在采集列表....".$_GET[id];
	 echo "<script>location.href='ls.php?id=".$_GET[id]."'</script>";
  }else{
  
     echo "采集结束";
  }
?>

