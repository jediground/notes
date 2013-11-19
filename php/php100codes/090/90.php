<?php

$doc = new DOMDocument('1.0', 'utf-8');
$doc -> formatOutput = true;

$root	= $doc -> createElement('root');	//创建一个标签
$index	= $doc -> createElement('index');	//创建一个标签

$id		= $doc -> createAttribute('id');	//设置属性
$newsid = $doc -> createTextNode("1");		//设置属性内容
$newsco = $doc -> createTextNode("content");//设置标签内容

$id		-> appendChild($newsid);	//继承属性
$index	-> appendChild($id);	    //继承属性内容
$index	-> appendChild($newsco);	//继承标签内容
$root	-> appendChild($index);		//继承子类
$doc	-> appendChild($root);

$doc	-> save("php100.xml");

?>