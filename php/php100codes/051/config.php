<?php
 session_start();
 //数据库连接
 $conn=mysql_connect('localhost','root','');
 mysql_select_db('member',$conn);
 //定义常量
 define(ALL_PS,"PHP100");

  function user_shell($uid,$shell){
    $sql="select * from user_list where `uid` = '$uid'";
    $query=mysql_query($sql);
    $us=is_array($row=mysql_fetch_array($query));
    $shell=$us ? $shell==md5($row[username].$row[password].ALL_PS):FALSE;
    if($shell){
     return $row;
    }else{
     echo "你无权限访问该页";
     exit();
    }
  }
 ?>