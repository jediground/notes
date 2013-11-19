<?
/********************************************
'文件名：SendOrder.php
'主要功能：该示范程序主要完成将商户订单信息提交至云网支付网关的功能
'版本：v1.1（Build2006-4-19）
'描述：假设商户的订单系统都已完成，本页面主要是帮助商户按照云网支付网关要求的格式将订单信息提交至云网支付@网的支付接口，进行支付操作
'版权所有：北京云网无限网络技术有限公司
'技术支持联系方式：86-010-82888778-8054 转技术部
'*******************************************/

//--订单信息---

	$c_mid		= "000103";						//商户编号，在申请商户成功后即可获得，可以在申请商户成功的邮件中获取该编号
	$c_order	= "123456";					    //商户网站依照订单号规则生成的订单号，不能重复
	$c_name		= "张三";						//商户订单中的收货人姓名
	$c_address	= "北京市朝阳区XX";				//商户订单中的收货人地址
	$c_tel		= "010-12345678";				//商户订单中的收货人电话
	$c_post		= "100001";						//商户订单中的收货人邮编
	$c_email	= "YourEmail@HostName.com";		//商户订单中的收货人Email
	$c_orderamount = "0.01";					//商户订单总金额
	$c_ymd		= "20050101";					//商户订单的产生日期，格式为"yyyymmdd"，如20050102
	$c_moneytype= "0";							//支付币种，0为人民币
	$c_retflag	= "1";							//商户订单支付成功后是否需要返回商户指定的文件，0：不用返回 1：需要返回
	$c_paygate	= "";							//如果在商户网站选择银行则设置该值，具体值可参见《云网支付@网技术接口手册》附录一；如果来云网支付@网选择银行此项为空值。
	$c_returl	= "http://www.YourSiteName.com/filePath/GetPayNotify.php";	//如果c_retflag为1时，该地址代表商户接收云网支付结果通知的页面，请提交完整文件名(对应范例文件：GetPayNotify.php)
	$c_memo1	= "ABCDE";						//商户需要在支付结果通知中转发的商户参数一
	$c_memo2	= "12345";						//商户需要在支付结果通知中转发的商户参数二
	$c_pass		= "123456";						//支付密钥，请登录商户管理后台，在帐户信息-基本信息-安全信息中的支付密钥项
	$notifytype	= "1";							//0普通通知方式/1服务器通知方式，空值为普通通知方式
	$c_language	= "0";							//对启用了国际卡支付时，可使用该值定义消费者在银行支付时的页面语种，值为：0银行页面显示为中文/1银行页面显示为英文

	$srcStr = $c_mid . $c_order . $c_orderamount . $c_ymd . $c_moneytype . $c_retflag . $c_returl . $c_paygate . $c_memo1 . $c_memo2 . $notifytype . $c_language . $c_pass;
	//说明：如果您想指定支付方式(c_paygate)的值时，需要先让用户选择支付方式，然后再根据用户选择的结果在这里进行MD5加密，也就是说，此时，本页面应该拆分为两个页面，分为两个步骤完成。
	
//--对订单信息进行MD5加密
	//商户对订单信息进行MD5签名后的字符串
	$c_signstr	= md5($srcStr);

?>

<html>
<body>

<p><strong>形式一：未定义支付银行的情况</strong></p>
<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center"> 
      <form name="payForm1" action="https://www.cncard.net/purchase/getorder.asp" method="POST">
			<input type="hidden" name="c_mid" value="<?=$c_mid?>">
			<input type="hidden" name="c_order" value="<?=$c_order?>">
			<input type="hidden" name="c_name" value="<?=$c_name?>">
			<input type="hidden" name="c_address" value="<?=$c_address?>">
			<input type="hidden" name="c_tel" value="<?=$c_tel?>">
			<input type="hidden" name="c_post" value="<?=$c_post?>">
			<input type="hidden" name="c_email" value="<?=$c_email?>">
			<input type="hidden" name="c_orderamount" value="<?=$c_orderamount?>">
			<input type="hidden" name="c_ymd" value="<?=$c_ymd?>">
			<input type="hidden" name="c_moneytype" value="<?=$c_moneytype?>">
			<input type="hidden" name="c_retflag" value="<?=$c_retflag?>">
			<input type="hidden" name="c_paygate" value="<?=$c_paygate?>">
			<input type="hidden" name="c_returl" value="<?=$c_returl?>">
			<input type="hidden" name="c_memo1" value="<?=$c_memo1?>">
			<input type="hidden" name="c_memo2" value="<?=$c_memo2?>">
			<input type="hidden" name="c_language" value="<?=$c_language?>">
			<input type="hidden" name="notifytype" value="<?=$notifytype?>">
			<input type="hidden" name="c_signstr" value="<?=$c_signstr?>">
			<input type="submit" name="submit" value="点击 -> 云网支付@网">
      </form>
	</td>
  </tr>
</table>

<br>

<p>
  <strong>形式二：定义单种支付银行的情况</strong><br>
  说明：本处只以中国工商银行举例，也可同时提供多种支付方式共消费者选择，如下文形式三，云网支付@网支持银行列表请参见《云网支付@网技术接口手册》 
</p>
<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center"> 
    <form name="payForm2" action="https://www.cncard.net/purchase/getorder.asp" method="POST">
		<input type="hidden" name="c_mid" value="<?=$c_mid?>">
		<input type="hidden" name="c_order" value="<?=$c_order?>">
		<input type="hidden" name="c_name" value="<?=$c_name?>">
		<input type="hidden" name="c_address" value="<?=$c_address?>">
		<input type="hidden" name="c_tel" value="<?=$c_tel?>">
		<input type="hidden" name="c_post" value="<?=$c_post?>">
		<input type="hidden" name="c_email" value="<?=$c_email?>">
		<input type="hidden" name="c_orderamount" value="<?=$c_orderamount?>">
		<input type="hidden" name="c_ymd" value="<?=$c_ymd?>">
		<input type="hidden" name="c_moneytype" value="<?=$c_moneytype?>">
		<input type="hidden" name="c_retflag" value="<?=$c_retflag?>">
		<input type="radio" name="c_paygate" value="3" checked>使用中国工商银行支付卡支付
		<input type="hidden" name="c_returl" value="<?=$c_returl?>">
		<input type="hidden" name="c_memo1" value="<?=$c_memo1?>">
		<input type="hidden" name="c_memo2" value="<?=$c_memo2?>">
		<input type="hidden" name="c_language" value="<?=$c_language?>">
		<input type="hidden" name="notifytype" value="<?=$notifytype?>">
		<input type="hidden" name="c_signstr" value="<?=$c_signstr?>">
		<input type="submit" name="submit" value="点击支付">
	</form>
	</td>
  </tr>
</table>

<br>

<p>
  <strong>形式三：定义多种支付银行的情况</strong><br>
  说明：本处只以招商银行和中国工商银行举例，云网支付@网支持银行列表请参见《云网支付@网技术接口手册》 
</p>
<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td align="center"> 
	  <form name="payForm3" action="https://www.cncard.net/purchase/getorder.asp" method="POST">
        <input type="hidden" name="c_mid" value="<?=$c_mid?>">
        <input type="hidden" name="c_order" value="<?=$c_order?>">
        <input type="hidden" name="c_name" value="<?=$c_name?>">
        <input type="hidden" name="c_address" value="<?=$c_address?>">
        <input type="hidden" name="c_tel" value="<?=$c_tel?>">
        <input type="hidden" name="c_post" value="<?=$c_post?>">
        <input type="hidden" name="c_email" value="<?=$c_email?>">
        <input type="hidden" name="c_orderamount" value="<?=$c_orderamount?>">
        <input type="hidden" name="c_ymd" value="<?=$c_ymd?>">
        <input type="hidden" name="c_moneytype" value="<?=$c_moneytype?>">
        <input type="hidden" name="c_retflag" value="<?=$c_retflag?>">
        <input type="radio" name="c_paygate" value="1" checked>
        使用招商银行支付卡支付<br> 
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="c_paygate" value="3">
        使用中国工商银行支付卡支付<br>
        <br>
        <input type="hidden" name="c_returl" value="<?=$c_returl?>">
        <input type="hidden" name="c_memo1" value="<?=$c_memo1?>">
        <input type="hidden" name="c_memo2" value="<?=$c_memo2?>">
        <input type="hidden" name="c_language" value="<?=$c_language?>">
        <input type="hidden" name="notifytype" value="<?=$notifytype?>">
        <input type="hidden" name="c_signstr" value="<?=$c_signstr?>">
        <input type="submit" name="submit" value="点击支付">
      </form>
	</td>
  </tr>
</table>

</body>
</html>