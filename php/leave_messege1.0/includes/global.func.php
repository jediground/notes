<?php
/****************************************************
*Author:cuzval
*Date:2012-2-9
*Languae:PHP
****************************************************/
//防止恶意调用
if (!defined('INC_POWER')) {
	exit('Access Defined!');
}


/**
 * alert_back()表是JS弹窗
 * @access public
 * @param $_info
 * @return void 弹窗
 */
function alert_back($info) {
	echo "<script type='text/javascript'>alert('$info');history.back();</script>";
	exit();
}

/**
 * 
 * 转义 特殊自如
 * @param string $string
 * @return sting
 */
function mysql_string($string){
	// get_magic_quotes_gpc()如果是开启转台,就不需要转义了，否则需要专一
	if (!MQG){
		return get_magic_quotes_gpc($string);	
	}
	return $string;
}


/**
 * _verify_code 生成验证码图片
 * @param int [$width][option] 验证码图片长度 
 * @param int [height][option] 验证码图片宽度 
 * @param int [$code_num][option]验证码'数字'个数
 * @param [$flag][option] true or false
 */
function verify_code($width = 75, $height = 25, $code_num = 5,  $flag = true){
	// 开启session
	//session_start();
	
	// 将输出类型改成图像流
	header('Content-Type:image/png');
	
	// 产生$code_num位十六进制数
	for ($i = 0; $i < $code_num; $i++){
		@$code .= dechex(mt_rand(0 ,15));
	}
	
	// 将验证码存到session中
	$_SESSION['verify_code'] = $code;
	
	// 创建真彩空白图像
	$img = imagecreatetruecolor($width, $height);
	
	// 填充背景颜色
	//白色
	$white_color = imagecolorallocate($img,255,255,255);
	$bg_color = imagecolorallocate($img, 170, 187 ,185); // 设置颜色
	imagefill($img, 0, 0, $bg_color);  // 将颜色填充上去
	
	//黑色,边框
	if ($flag){
		$black_color = imagecolorallocate($img,0,0,0);
		imagerectangle($img,0,0,$width-1,$height-1,$black_color);
	}
	
	//随机画出6条线条
	for ($i=0;$i<6;$i++) {
		$rnd_color = imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
		imageline($img,mt_rand(0,$width),mt_rand(0,$height),mt_rand(0,$width),mt_rand(0,$height),$rnd_color);
	}
	
	//随机雪花
	for ($i=0;$i<100;$i++) {
		$rnd_color = imagecolorallocate($img,mt_rand(200,255),mt_rand(200,255),mt_rand(200,255));
		imagestring($img,1,mt_rand(1,$width),mt_rand(1,$height),'*',$rnd_color);
	}
	
	
	// 输出验证码
	//$rnd_color = imagecolorallocate($img,mt_rand(0,100),mt_rand(0,150),mt_rand(0,200));
	//imagestring($img,3,12,2,$code,$rnd_color);
	
	// 为了得到更好的效果，按以下方式输出验证码
	for ($i=0;$i<strlen($_SESSION['verify_code']);$i++) {
		$rnd_color = imagecolorallocate($img,mt_rand(0,100),mt_rand(0,150),mt_rand(0,200));
		imagestring($img, 3, $width/$code_num*$i+mt_rand(0,$width/$code_num/2), mt_rand(1, $height/2), $_SESSION['verify_code'][$i], $rnd_color);
	}
	
	// 以png格式讲图像输出到浏览器
	imagepng($img);
	
	// 释放内存
	imagedestroy($img);
	
	
}













?>