<?php
/****************************************************
*Author:cuzval
*Date:2012-2-9
*Languae:PHP
****************************************************/
$_SESSION['codem'] = 'faldfolaeno';

//echo $_SESSION['codem'];

$a = 'This is a test';
//echo "测试$a" . '<hr />';
//echo '测试$a' . '<hr />';



define('ROOT_PATH', substr(dirname(__FILE__), 0, -8));
//echo ROOT_PATH;
//echo dirname(__FILE__);

//echo get_magic_quotes_gpc();


	$receive_username = "中文怎么了";
	$char_patten = '/[<>\'\"\ \　]/';
	if (preg_match($char_patten, $receive_username)){
		echo '要不得';
	}else{
		echo '可以';
	}
	





















?>