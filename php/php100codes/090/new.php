<?php

$doc = new DOMDocument('1.0', 'utf-8');
$doc -> formatOutput = true;


$php100		= $doc -> createElement('php100');	//创建一个标签
$php1000	= $doc -> createElement('php1000');	//创建一个标签
$php10000	= $doc -> createElement('title');	//创建一个标签
$php20000	= $doc -> createElement('content');	//创建一个标签

$newsco = $doc -> createTextNode("333333333333333");//设置标签内容
$newsco2 = $doc -> createTextNode("222222222222222");//设置标签内容
$newsco3 = $doc -> createTextNode("555");//设置属性内容


$xmlnew		= $doc -> createAttribute('xmlnew');	//设置属性


$php10000	-> appendChild($newsco);

$php20000	-> appendChild($newsco2);
$xmlnew	-> appendChild($newsco3);

$php1000	-> appendChild($xmlnew);
$php1000	-> appendChild($php10000);
$php1000	-> appendChild($php20000);

$php100	-> appendChild($php1000);

$doc	-> appendChild($php100);

$doc	-> save("php.xml");
?>