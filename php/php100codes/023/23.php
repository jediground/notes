<?php
interface demo{
const NAME=" 名称";//常量一般用大写
function fun1();
function fun2();
}
interface demo2{
function fun3();
function fun4();
}
interface demo3{
const PLAY="play";
function fun5();

}

class mypc implements demo,demo2{
//要全部重载
function fun1(){
echo "111111111111<br>";
}
function fun2(){
echo "2222222222222<br>";
}
function fun3(){
echo "3333333333<br>";
}
function fun4(){
echo "444444444444444<br>";
}
}
$p=new mypc();
//单继承多接口
class myps extends mypc implements demo3{
function fun5(){
echo "555555555<br>";
}
}
//首先继承再引用
$p=new myps();
$p->fun5();
$p->fun4();
echo myps::NAME."<br>";
echo myps::PLAY;
?>