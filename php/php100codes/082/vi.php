<?php


$con = file_get_contents("http://it.sohu.com/20100507/n271970537.shtml");


 echo zz("#<title>(.*)</title>#i",$con);

 echo zz("#<!-- 正文 st -->(.*)<!-- 正文 end -->#iUs",$con);


function zz($preg,$con,$num=1){
preg_match($preg, $con, $arr); 
return $arr[$num];
}
?>