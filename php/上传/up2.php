<?php

/*
 * Programmer : Msn/QQ haowubai@hotmail.com (925939)
 * www.php100.com Develop a project PHP - MySQL - Apache
 * Window 2003 - Preferences - PHPeclipse - PHP - Code Templates
 */

if (is_uploaded_file($_FILES['upfile']['tmp_name'])){

$upfile=$_FILES["upfile"];

$name = $upfile["name"];
$type = $upfile["type"];
$size = $upfile["size"];
$tmp_name = $upfile["tmp_name"];
$error = $upfile["error"];


switch ($type) {
	case 'image/pjpeg' : $ok=1;
		break;
	case 'image/jpeg' : $ok=1;
		break;
	case 'image/gif' : $ok=1;
		break;
	case 'image/png' : $ok=1;
		break;
}

if($ok && $error=='0'){
 move_uploaded_file($tmp_name,'up/'.$name);
 echo "上传成功";
}
}


?>

<form action="" enctype="multipart/form-data" method="post" name="upform">
  上传文件:
  <input name="upfile" type="file">
  <input type="submit" value="上传"><br>
 </form>
