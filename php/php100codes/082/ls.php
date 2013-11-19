<?php

$con .= file_get_contents("http://it.sohu.com/7/1002/17/column203661721_3259.shtml");

$preg = "#<h1>¡¤<a href='(.*)' target='_blank'>(.*)</a><span>#";

preg_match_all($preg, $con, $arr); 

//print_r($arr);

foreach($arr[1] as $id=>$v){

  echo "<a href=$v>".$v."</a> ".$arr[2][$id]."<br>";
  
}

?>
