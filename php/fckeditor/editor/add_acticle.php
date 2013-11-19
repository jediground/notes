<?php
//引入
include 'fckeditor.php';

//取得目录
$base_path = $_SERVER['PHP_SELF'];
$base_path = dirname($base_path) . '/';

$edit = new FCKeditor('con');
$edit->BasePath = $base_path;
if ($_POST['sub']){
	echo '标题：' . $_POST['title'] . '<hr />';
	echo '内容：' . $_POST['con']. '<hr />';
}
?>
<form action="" method="post">
标题：<input type="text" name="title" value="" />
<?php 
$edit->Value =''; //初始化内容【失效】
$edit-> ToolbarSet = 'Basic'; // 精简模式
$edit->Create();
?>
<input type="submit" name="sub" value="添加文章">
</form>