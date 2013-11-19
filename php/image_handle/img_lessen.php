<?php
// 将输出类型改成图像流
header('Content-Type:image/png');

// 获取图片路径
$dir = dirname(__FILE__) . '\\';
//$img = imagecreatefrompng($dir . '222.png');

list($width, $height) = getimagesize($dir . '222.png');

// 将原图缩小
$width_ = $width * 0.5;
$height_ = $height * 0.5;

// 创建一个新图
$img_ = imagecreatetruecolor($width_, $height_);

// 载入原图
$img = imagecreatefrompng($dir . '222.png');

// 将原图拷贝到新图上去
imagecopyresampled($img_, $img, 0, 0, 0, 0, $width_, $height_, $width, $height);


// 以png格式将新图像输出到浏览器
imagepng($img_);
imagedestroy($img_);
imagedestroy($img);





?>