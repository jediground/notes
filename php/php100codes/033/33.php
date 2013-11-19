<?php
/*echo rand(3,9)."<br>";//rand随机函数
echo dechex(13)."<br>";//dechex 十进制转换为十六进制,括号里填是十进制数 ，dechex返回16进制
echo dechex(rand(3,9))."<br>";

for($i=0;$i<4;$i++){
$rand.=dechex(rand(1,15));
}
echo $rand;
*/

//生成随机数-》创建图片-》随机数写进图片-》保存在SESSION中
session_start();
for($i=0;$i<4;$i++){
$rand.=dechex(rand(1,15));
}

$_SESSION[check_pic]=$rand;
$im=imagecreatetruecolor(100,30);// 新建一个真彩色图像  x就是宽 ，y就是高
 
//设置颜色
//为一幅图像分配颜色(调色板)
//imagecolorallocate ( resource image, int red, int green, int blue )三原色
$bg=imagecolorallocate($im,0,0,0);//第一次调式版的时候，背景颜色
$te=imagecolorallocate($im,225,225,225);


//把字符串写在图像左上角
//绘图函数  imagestring ( resource image, font, int x, int y, 内容 , 颜色 )
imagestring($im,rand(1,6),rand(3,70),rand(0,16),$rand,$te);

//输入图像
header("Content_type:image/jpeg");
imagejpeg($im);




?>