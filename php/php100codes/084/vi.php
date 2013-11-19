<?php

  /*
  author： www.php100.com 视频教程源码 84讲
  */

   include_once("conn.php");

  $gid =(int)$_GET[id];
   
   $sql="select * from tmp_url where id='$gid'";
   $q=mysql_query($sql);
   $row = mysql_fetch_array($q);
   
   $con=file_get_contents($row[url]);
    echo $titles="<b>".zz("#<title>(.*)</title>#iUs",$con)."</b>";

    echo $conts=zz("#<!-- 正文 st -->(.*)<!-- 正文 end -->#iUs",$con);
  
    $intosql="INSERT INTO `news` (`id`, `title`, `content`) VALUES (NULL, '$titles', '$conts');";
	mysql_query($intosql);


	//============================

   $sql2="select * from tmp_url where id>'$gid' order by id asc limit 1";
   $q2=mysql_query($sql2);
   $row2 = mysql_fetch_array($q2);
    echo $row2[0].$row2[1]."<br>";
    if($row2[0]){
    echo "<script>location.href='vi.php?id=".$row2[0]."'</script>";
	}

  
  function zz($preg,$con,$num=1){
  preg_match($preg,$con,$arr);
   return $arr[$num];
  }
?>