<?php
/*class A{}
class B{}
$thing=new A;
if($thing instanceof A){
echo "A";
}
if($thing instanceof B){
echo "B";
}*/
interface myusb{
function type();
function alert();
}
class zip implements myusb{
function type(){
echo "2.0";
}
function alert()
{
echo "正在检查U盘驱动";
}

}
class mp3 implements myusb{
function type(){
echo "1.0";
}
function alert()
{
echo "正在检查mp3驱动";
}

}
class mypc{
function pcusb($what){
$what->type()."<br>";
$what->alert();
}
}
$p=new mypc();
$zip=new zip();
$mp3=new mp3();
$p->pcusb($zip);
echo "<br>";
$p->pcusb($mp3);






?>