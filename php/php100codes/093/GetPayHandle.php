<?
/*******************************************
'文件名：GetPayHandle.php
'主要功能：该示范程序主要完成接收云网支付网关支付通知信息，验证信息有效性，给用户显示支付结果和相关订单信息等。
'版本：v1.1（Build2006-4-19）
'说明：
'	1.本页面请不要使用诸如response.redirect等页面转向的语句
'	2.商户可根据支付结果和订单号查询出本次订单信息或发货信息显示给用户
'	3.本页面如果含有图片、样式或链接，请将路径或地址包括域名，比如<img src="http://www.yoursitename.com/imagers/aaa.gif">
'版权所有：北京云网无限网络技术有限公司
'技术支持联系方式：86-010-82888778-8054 转技术部
'*******************************************/

//--获取云网支付网关向商户发送的支付通知信息(以下简称为通知信息)
	$c_mid			= $_REQUEST['c_mid'];			//商户编号，在申请商户成功后即可获得，可以在申请商户成功的邮件中获取该编号
	$c_order		= $_REQUEST['c_order'];			//商户提供的订单号
	$c_orderamount	= $_REQUEST['c_orderamount'];	//商户提供的订单总金额，以元为单位，小数点后保留两位，如：13.05
	$c_ymd			= $_REQUEST['c_ymd'];			//商户传输过来的订单产生日期，格式为"yyyymmdd"，如20050102
	$c_transnum		= $_REQUEST['c_transnum'];		//云网支付网关提供的该笔订单的交易流水号，供日后查询、核对使用；
	$c_succmark		= $_REQUEST['c_succmark'];		//交易成功标志，Y-成功 N-失败			
	$c_moneytype	= $_REQUEST['c_moneytype'];		//支付币种，0为人民币
	$c_cause		= $_REQUEST['c_cause'];			//如果订单支付失败，则该值代表失败原因		
	$c_memo1		= $_REQUEST['c_memo1'];			//商户提供的需要在支付结果通知中转发的商户参数一
	$c_memo2		= $_REQUEST['c_memo2'];			//商户提供的需要在支付结果通知中转发的商户参数二
	$c_signstr		= $_REQUEST['c_signstr'];		//云网支付网关对已上信息进行MD5加密后的字符串

	//--校验信息完整性---
		if($c_mid=="" || $c_order=="" || $c_orderamount=="" || $c_ymd=="" || $c_moneytype=="" || $c_transnum=="" || $c_succmark=="" || $c_signstr==""){
			echo "支付信息有误!";
			exit;
		}

	//--将获得的通知信息拼成字符串，作为准备进行MD5加密的源串，需要注意的是，在拼串时，先后顺序不能改变
		//商户的支付密钥，登录商户管理后台(https://www.cncard.net/admin/)，在管理首页可找到该值
		$c_pass = "123456";
		
		$srcStr = $c_mid . $c_order . $c_orderamount . $c_ymd . $c_transnum . $c_succmark . $c_moneytype . $c_memo1 . $c_memo2 . $c_pass;

	//--对支付通知信息进行MD5加密
		$r_signstr	= md5($srcStr);

	//--校验商户网站对通知信息的MD5加密的结果和云网支付网关提供的MD5加密结果是否一致
		if($r_signstr!=$c_signstr){
			echo "签名验证失败";
			exit;
		}

	//--校验商户编号
		$MerchantID="000103";	//商户自己的编号
		if($MerchantID!=$c_mid){
			echo "提交的商户编号有误";
			exit;
		}

	//--连接数据库
		$link = mysql_connect("服务器名称", "用户名", "密码") or die("Could not connect : " . mysql_error());
			mysql_select_db("数据库名称") or die("Could not select database");

	//--校验商户订单系统中是否有通知信息返回的订单信息
		$query = "select top 1 订单金额,订单生成日期,转发参数一,转发参数二 from 商户的订单表 where 商户订单号='".$c_order."'";
		$result = mysql_query($query) or die("Query failed : " . mysql_error());
		if(mysql_num_rows($result)!=1){
			echo "未找到该订单信息";
			exit;
		}

	//--校验商户订单系统中记录的订单金额和云网支付网关通知信息中的金额是否一致
		$row = mysql_fetch_array($result);	//获取商户自己系统记录的订单信息

	//--释放记录集,关闭数据库连接
		mysql_free_result($result);
		mysql_close($link);

		$r_orderamount = $row["订单金额"];	//商户从自己订单系统获取该值
		if($r_orderamount!=$c_orderamount){
			echo "支付金额有误";
			exit;
		}

	//--校验商户订单系统中记录的订单生成日期和云网支付网关通知信息中的订单生成日期是否一致
		$r_ymd = $row["订单生成日期"];		//商户从自己订单系统获取该值
		if($r_ymd!=$c_ymd){
			echo "订单时间有误";
			exit;
		}

	//--校验商户系统中记录的需要在支付结果通知中转发的参数和云网支付网关通知信息中提供的参数是否一致
		$r_memo1 = $row["转发参数一"];
		$r_memo2 = $row["转发参数二"];
		if(($r_memo1<>$c_memo1) || ($r_memo2<>$c_memo2)){
			echo "参数提交有误";
			exit;
		}

	//--校验返回的支付结果的格式是否正确
		if($c_succmark!="Y" && $c_succmark!="N"){
			echo "参数提交有误";
			exit;
		}

	//--根据返回的支付结果，商户网站可自行给用户显示说明
		if($c_succmark="Y"){
			由于在GetPayNotify.php中已进行了实际发货操作，所以在此处只要系统中查询出本订单的结果，然后给用户显示购买成功的提示信息即可。
		}
		else{
			
		}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>云网@网－在线支付结果</title>
</head>

<body>
支付完成后，给用户显示此次在线支付的结果和订单信息或提货信息。
</body>
</html>