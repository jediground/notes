
<?php

/*
 * Created on 2011-7-17
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?

class MyPc {
	public $name;
	public $type;

	function __construct($name = '', $type = '') {
		$this->name = $name;
		$this->type = $type;
	}

	function vod() {
		return $this->name . $this->type . ",播放电影";
	}

	function game() {
		return $this->name . ",玩游戏";
	}

	function intelnet() {
		return "上网";
	}

	function __destruct() {
		echo "<br>==========" . $this->name;
	}
}

$pc1 = new MyPc('家用电脑', '，台式机');

$pc2 = new MyPc('公司电脑');

echo $pc1->vod() . "<br>";
echo $pc2->game() . "<br>";
?>