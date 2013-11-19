<?php



$conn = @ mysql_connect("localhost", "root", "") or die("服务器链接错误");//链接服务器
mysql_select_db("newdb", $conn); //打开数据库
mysql_query("set names 'GBK'"); //使用GBK中文编码;

function htmtocode($content) { //自定义的替换函数，也可用于屏蔽某些字体
	$content = str_replace("\n", "<br>", str_replace(" ", "&nbsp;", $content));
	return $content;
}

//$content=str_replace("'","‘",$content);
// htmlspecialchars();


?>
