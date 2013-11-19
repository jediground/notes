<?php
// 将输出类型改成图像流
header('Content-Type:image/png');

// 获取图片路径
$dir = dirname(__FILE__) . '\\';
$img = imagecreatefrompng($dir . '222.png');

// 处理水印位置
$str = 'cuzval.com';
$len = strlen($str) * 9; 
$sx = imagesx($img) * 0.9 - $len;
$sy = imagesy($img) * 0.9;


// 插入字符串水印
$jam_color = imagecolorallocate($img, 240, 240 ,240);
imagestring($img, 6, $sx, $sy, $str, $jam_color);

// 中文水印
$text = iconv('GBK', 'UTF-8', '天朝程序员');
$font = 'C:\Windows\Fonts\SIMLI.TTF'; // 字体需支持中文
imagettftext($img, 20, 17, 35, 70, $jam_color, $font, $text);


// 以png格式讲图像输出到浏览器
imagepng($img);
imagedestroy($img);

?>   