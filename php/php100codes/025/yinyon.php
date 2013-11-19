 <?php
/* include("demo.php");
 include("test.php");*/
  //自动载人
  function __autoload($name){
  include("$name.php");
  }
 $d=new demo();
 $d->fun1();
 $t=new test();
 $t->fun2();
 
 ?>