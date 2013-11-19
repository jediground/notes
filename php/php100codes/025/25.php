<?php
class my{
public $name="我的类";
function __tostring(){
return $this->name."这是应该空类";
}
function __call($n,$v){//提示错误的办法
echo "不存在的办法为：".$n;
echo "错误的值".print_r($v);
}
function __destruct(){
echo "<br>清理一个对象";
}
function __clone(){
$this->name="你的类";
}
}
$p=new my();
echo $p."<br>";
$p->demo("第一",6);
echo "<br>";
$b=clone $p;//克隆
echo $p->name."<br>";
echo $b->name;

?>