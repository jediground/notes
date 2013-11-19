
<?php

使用PDO方式防止SQL注入
$sql="select * from users where username=? and password=?";
//1.创建一个pdo对象
$my_pdo = new PDO(mysql:host=localhsot;prot=3306;dbname="test","root","");
//2.设置编码
$my_pdo->exec("set names utf8");
//3.预处理$sql
$pdo_state=$my_pdo->prepare($sql);
//4.把接收的用户名和密码填入
$pdo_state->execute(array($username,$password));
5.//取出结果
$res=$pdo_state->fetch();

if(empty($res)){
	exit("你的用户名或密码错误");
}else{
	header("localtion:mangeusers.php");
}
