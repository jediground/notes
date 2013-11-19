<?php
/*
 * Created on 2011-7-17
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?
class MyPc{
	public $name;
	public $type;

	function vod(){
		return $this->name. ",播放电影";
		}

	function game(){
		return $this->name. "玩游戏";
	}

	function intelnet(){
		return "上网";
	}
}

$pc1=new MyPc();
$pc1->name="家用电脑";
$pc2=new MyPc();
$pc2->name="公司电脑";
$pc3=new MyPc();
$pc3->name="私人电脑";

echo $pc1->vod()."<br>";
echo $pc2->game()."<br>";
echo $pc3->name.$pc3->intelnet();


?>