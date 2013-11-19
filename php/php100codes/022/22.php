<?php
/*//final关键字   不能继承   不能重载
//final class mypc{
class mypc{
public $name="我的电脑";
//final function power(){
function power(){
echo $this->name."电脑个开中。。。";
}
}
class my extends mypc{
function power(){//重载
echo mypc::power()."$$$$$";
}
}
$p=new my();
$p->power();*/

?>
<?php
final class mypc{
const NAME="我的电脑";
//static $name="我的电脑";
static function power(){
//echo self::$name."电脑个开中。。。";
echo mypc::NAME."电脑个开中。。。";

//静态采用self访问
}
}
$p=new mypc();
$p->power();
//mypc::$name="hhhhhhhh";
//echo mypc::power();

?>