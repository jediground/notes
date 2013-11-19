<?php
class mypc{
private $name;
function __construct($name=""){
return $this->name=$name;
}
function __get($name){
return $this->name."===========";
}
function __set($n,$v){
if($v>"100"){
$this->$n=$v;
}
}
private function power(){
return $this->name."打开电源。正在开机。。。";
}
function ok(){
return $this->power()."开机成功！";
}
}
$pc1=new mypc("我的电脑");
$pc1->name="101";
echo $pc1->name;

?>
