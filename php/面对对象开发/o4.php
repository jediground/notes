<?php

/*
 * Created on 2011-7-17
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?

class Root {
	function dayin() {
		return "Root print <br>";
	}
}

class Son extends Root {
	function dayin() {
		return Root :: dayin() . "Soot print <br>";
	}
}

$p = new Son();
echo $p->dayin();
?>