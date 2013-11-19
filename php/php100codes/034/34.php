<?php

//生成随机数-》创建图片-》随机数写进图片-》保存在SESSION中
session_start();
for($i=0;$i<4;$i++){
$rand.=dechex(rand(1,15));
}

$_SESSION[check_pic]=$str;
$im=imagecreatetruecolor(100,30);// 新建一个真彩色图像  x就是宽 ，y就是高
 
//设置颜色
//为一幅图像分配颜色(调色板)
//imagecolorallocate ( resource image, int red, int green, int blue )三原色
$bg=imagecolorallocate($im,0,0,0);//第一次调式版的时候，背景颜色
$te=imagecolorallocate($im,225,225,225);

//画线条
for($i=0;$i<3;$i++){
$te2=imagecolorallocate($im,rand(0,225),rand(0,225),rand(0,225));
//imageline ( resource image, int x1, int y1, int x2, int y2, int color )
imageline($im,rand(0,100),0,rand(0,100),rand(0,30),$te2);
}
//画点
for($i=0;$i<100;$i++){
imagesetpixel($im,rand()%100,rand()%30,$te2);

}
//写入中文
$str=iconv("gbk","UTF-8","呵好哈");//把gbk编码转换成UTF-8
imagettftext($im,12,rand(0,10),20,20,$te,'simkai.ttf',$str);//rand(3,10）倾斜度


//把字符串写在图像左上角
//绘图函数  imagestring ( resource image, font, int x, int y, 内容 , 颜色 )
//imagestring($im,rand(1,6),rand(3,70),rand(0,16),$rand,$te);

//输入图像
header("Content_type:image/jpeg");
imagejpeg($im);




?>