<?php

   include_once("conn.php");

   $sql="select * from tmp_url limit 3";
   $q=mysql_query($sql);
   while($row = mysql_fetch_array($q)){
     
	 $con=file_get_contents($row[url]);


    echo zz("#<title>(.*)</title>#iUs",$con);

    echo zz("#<!-- 正文 st -->(.*)<!-- 正文 end -->#iUs",$con);

    echo "<hr>";
   }


  
 // $con=file_get_contents($_GET[url]);


 //  echo zz("#<title>(.*)</title>#iUs",$con);

//   echo zz("#<!-- 正文 st -->(.*)<!-- 正文 end -->#iUs",$con);

 
  
  
  
  function zz($preg,$con,$num=1){
  preg_match($preg,$con,$arr);
   return $arr[$num];
  }
?>