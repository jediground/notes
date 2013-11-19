<?php
// www.php100.com
//PHP100视频教程 98讲 权限交叉控制

 define("ADD",1);
 define("UPD",2);
 define("LIS",4);
 define("DEL",8);

 $sy = ADD | UPD | LIS | DEL;

   $ny = $sy ^ ADD;
   echo  "<BR>无添加权限：". decbin($ny);


  
  
  
 
?>