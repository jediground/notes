<?php
/**
 * EXPLAIN:
 * 将数据写入一个文件，有3个步骤：
 * 	1.打开这个文件。如果文件不存在，需要先创建它。
 * 	2.将数据写入这个文件。
 * 	3.关闭这个文件
 * 同样，从一个文件中读出数据，也有3个步骤：
 *  1.打开这个文件。如果这个文件不能打开，就应该意识到这一点并且正确地退出。
 *  2.从文件中读出数据。
 *  3.关闭这个文件。
 **/

$f = fopen('content.txt',w);// 读写方式打开一个文件
$str = 'I love you more than I can say';
fwrite($f,$str,strlen($str)); // 写入字符串
fclose($f); // 关闭打开

$array_file = file ('content.txt');
print_r();
echo '<hr />';
readfile('content.txt');



?>