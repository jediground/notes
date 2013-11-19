<?php
class mypc{
public $name;
public $type;
function __construct($name="",$type=""){
$this->name=$name;
$this->type=$type;
}
function vod(){
return $this->name.$this->name."播放电影";
}
function game(){
return $this->vod().$this->type."玩游戏";
}
function intelent(){
return "上网";
}
function __destruct(){
echo "<br>=====".$this->name."<br>";
}
}
$pc1=new mypc("家用电脑","台式机");
$pc2=new mypc("公司电脑","笔记本");

echo $pc1->vod()."<br>";
//$pc1=unll;
echo $pc2->vod()."<br>";
?>