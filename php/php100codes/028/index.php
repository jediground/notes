<?php
/*
capitalize [首字母大写] 
count_characters [计算字符数] 
cat [连接字符串] 
count_paragraphs [计算段落数]
count_sentences [计算句数]
count_words [计算词数]
date_format [时间格式]
default [默认]
escape [转码]
indent[缩进]
lower[小写 ]
nl2br[换行符替换成<br />]
regex_replace[正则替换]
replace[替换]
spacify[插空]
string_format[字符串格式化]
strip[去除(多余空格)]
strip_tags[去除html标签]
truncate[截取]
upper[大写]
wordwrap[行宽约束]

*/
include("smarty_inc.php");
$value="it is Work and,  it is php100 video.<a href=ssss>aaaaa</a>";
$smarty->assign('name',$value);
//$smarty->assign('name',2323232.23232);
//$smarty->assign('name',strtotime('-0'));
$smarty->display("index.html");
?>