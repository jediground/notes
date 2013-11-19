<?php
abstract class cl1{
abstract function fun1();
abstract function fun2();
abstract function fun3();
 function ok(){
 }
}
class cl2 extends cl1{
//全部重载才能进行实例化
 function fun1(){
 echo "第一个";
}
 function fun2(){
 return "第二个";
}
function fun3(){
 echo "第三个";
}
}
$p=new cl2();
$p->fun1();
echo "<br>";
echo $p->fun2()."<br>";
$p->fun3();
?>
