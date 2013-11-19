<?php
// 将输出类型改成图像流
header('Content-Type:image/png');

// 创建真彩空白图像
$img = imagecreatetruecolor(60, 20);

// 填充背景颜色
$bg_color = imagecolorallocate($img, 81, 179 ,189); // 设置颜色
imagefill($img, 0, 0, $bg_color);  // 讲颜色填充上去

// 在背景上输出一些线条，点等(干扰)
$jam_color = imagecolorallocate($img, 255, 255 ,255);
imageline($img, 0 , 0, 50, 17, $jam_color); // 绘制线条
$pixel_color =  imagecolorallocate($img, 30, 30 ,0);
for ($i = 0; $i < 50; $i++){
	imagesetpixel($img,rand(0,60), rand(0,20),$pixel_color);
}

// 插入字符串
imagestring($img,2,12,2,'cuzval',$jam_color);


// 以png格式讲图像输出到浏览器
imagepng($img);
imagedestroy($img);
?>