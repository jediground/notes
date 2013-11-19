<?php
// 将输出类型改成图像流
header('Content-Type:image/png');

// 创建真彩空白图像
$img = imagecreatetruecolor(60, 20);

// 填充背景颜色
$bg_color = imagecolorallocate($img, 170, 187 ,185); // 设置颜色
imagefill($img, 0, 0, $bg_color);  // 讲颜色填充上去

// 产生六位十六进制数
for ($i = 0; $i <= 5; $i++){
	@$code .= dechex(mt_rand(0 ,15));
}

// 插入字符串
$jam_color = imagecolorallocate($img, 0, 0 ,0);
imagestring($img,3,12,2,$code,$jam_color);


// 以png格式讲图像输出到浏览器
imagepng($img);

// 释放内存
imagedestroy($img);
?>