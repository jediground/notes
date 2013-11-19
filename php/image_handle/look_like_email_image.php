<?php

// 将输出类型改成图像流
header('Content-Type:image/png');

// 创建真彩空白图像
$img = imagecreatetruecolor(150, 100);

// 填充背景颜色
$bg_color = imagecolorallocate($img, 170, 187 ,185); // 设置颜色
imagefill($img, 0, 0, $bg_color);  // 将颜色填充上去

// 在背景上输出一些线条
$jam_color = imagecolorallocate($img, 255, 255 ,255);
imageline($img, 0 , 0, 75, 50, $jam_color); // 绘制线条
imageline($img, 150 , 0, 75, 50, $jam_color);
imageline($img, 0 , 100, 50, 35, $jam_color);
imageline($img, 150 , 100, 100, 35, $jam_color);


// 插入字符串
imagestring($img,4,45,10,'Valmail',$jam_color);


// 以png格式讲图像输出到浏览器
imagepng($img);
imagedestroy($img)
?>