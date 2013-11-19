<?php
include('fckeditor.php');

  $sBasePath = $_SERVER['PHP_SELF'] ; 
  $sBasePath = dirname($sBasePath).'/'; 
  
  $ed=new FCKeditor('con');
  $ed->BasePath=$sBasePath;
  $ed->ToolbarSet='Basic';
  
  if($_POST[sub]){
  echo "标题:".$_POST[title];
  echo  "FCK内容:".$_POST[con];
  }
  
  //$ed->Create();


?>
<form action="" method="post">
<input type="text" name="title" value="">

<?php 
$ed->Value='初始值<br>这是PHP100视频的演示';
$ed->Create(); 
?>

<input type="submit" name="sub" value="添加新闻"/>
</form>