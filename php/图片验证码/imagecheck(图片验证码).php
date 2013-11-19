
<?


//生成随机数->创建图片->随机写进图片->保持在SESSION中


for ($i = 0; $i < 4; $i++) {
	$rand .= dechex(rand(1, 15));
}

$im = imagecreatetruecolor(100, 30);

//设置颜色
$bg = imagecolorallocate($im, 0, 0, 0); //第一次使用调试版的时候，背景颜色
$te = imagecolorallocate($im, 255, 255, 255);


//画线条
for ($i = 0; $i < 3; $i++) {
	$te2 = imagecolorallocate($im, rand(0, 255), rand(0, 255), rand(0, 255));
	imageline($im, rand(0, 100), 0, 100, 30, $te2);
}


//画点
for ($i = 0; $i < 150; $i++) {
	imagesetpixel($im, rand() % 100, rand() % 30, $te2);
}




//把汉字写在图像上
$con="毛额大司农";
$str=iconv("gbk","UTF-8","$con");//转换编码
imagettftext($im,12,5,20,20,$te,'C:\Windows\Fonts\方正流行体简体.ttf',$str);




//把字符串写在图像上
//imagestring($im, rand(3, 6), rand(0, 70), rand(0, 15), $rand, $te);


//输出图像
header("Content-type： image/png");
imagepng($im);

















?>