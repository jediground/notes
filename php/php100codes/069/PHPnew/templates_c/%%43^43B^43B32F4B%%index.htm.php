<?php /* Smarty version 2.6.26, created on 2009-11-24 13:27:42
         compiled from index.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['sm_config'][0]; ?>
</title>
<link href="<?php echo $this->_tpl_vars['t_dir']; ?>
css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['t_dir']; ?>
css/layout.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['t_dir']; ?>
css/red.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="content border_bottom">
	 <ul id="sub_nav">
		 <li><a href="<?php echo $this->_tpl_vars['sm_config'][0]; ?>
">设为首页</a></li>
		 <li><a href="#">加入收藏</a></li>
		 <li class="nobg"><a href="#">联系我们</a></li>
	 </ul>
	      <img src="<?php echo $this->_tpl_vars['t_dir']; ?>
img/logo.gif" alt="居然之家" name="logo" width="200" height="75" id="logo" /><br class="clear" />
</div>
<div class="content dgreen-bg">
     <div class="content">
	 <ul id="main_nav">
		 <li class="nobg"><a href="index.php">新闻首页</a></li>
		<?php unset($this->_sections['l']);
$this->_sections['l']['name'] = 'l';
$this->_sections['l']['loop'] = is_array($_loop=$this->_tpl_vars['sm_class']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['l']['show'] = true;
$this->_sections['l']['max'] = $this->_sections['l']['loop'];
$this->_sections['l']['step'] = 1;
$this->_sections['l']['start'] = $this->_sections['l']['step'] > 0 ? 0 : $this->_sections['l']['loop']-1;
if ($this->_sections['l']['show']) {
    $this->_sections['l']['total'] = $this->_sections['l']['loop'];
    if ($this->_sections['l']['total'] == 0)
        $this->_sections['l']['show'] = false;
} else
    $this->_sections['l']['total'] = 0;
if ($this->_sections['l']['show']):

            for ($this->_sections['l']['index'] = $this->_sections['l']['start'], $this->_sections['l']['iteration'] = 1;
                 $this->_sections['l']['iteration'] <= $this->_sections['l']['total'];
                 $this->_sections['l']['index'] += $this->_sections['l']['step'], $this->_sections['l']['iteration']++):
$this->_sections['l']['rownum'] = $this->_sections['l']['iteration'];
$this->_sections['l']['index_prev'] = $this->_sections['l']['index'] - $this->_sections['l']['step'];
$this->_sections['l']['index_next'] = $this->_sections['l']['index'] + $this->_sections['l']['step'];
$this->_sections['l']['first']      = ($this->_sections['l']['iteration'] == 1);
$this->_sections['l']['last']       = ($this->_sections['l']['iteration'] == $this->_sections['l']['total']);
?>
		 <li><a href="list.php?cid=<?php echo $this->_tpl_vars['sm_class'][$this->_sections['l']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['sm_class'][$this->_sections['l']['index']]['name']; ?>
</a></li>
		<?php endfor; endif; ?>
	 </ul><br class="clear" />
	 </div>
</div>
<div class="content">
     <div id="left-nav-bar" class="bg_white">
	      <p id="top-contact-info">
		  姓名：<br />
		  电话：<br />
		  OICQ：<br />
		  手机：<br />
		  地址：
		  </p>
		  <h2>招商信息</h2>
		  <ul>
			  <li><a href="#">千亿美元进中国 推高股价房价</a></li>
			  <li><a href="#">千亿美元进中国 推高股价房价</a></li>
			  <li><a href="#">千亿美元进中国 推高股价房价</a></li>
			  <li><a href="#">千亿美元进中国 推高股价房价</a></li>
		  </ul>
		  <h2>企业资讯</h2>
		  <ul>
			  <li><a href="#">千亿美元进中国 推高股价房价</a></li>
			  <li><a href="#">千亿美元进中国 推高股价房价</a></li>
			  <li><a href="#">千亿美元进中国 推高股价房价</a></li>
			  <li><a href="#">千亿美元进中国 推高股价房价</a></li>
		  </ul>
		  <h3><a href="#"><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
img/sq-txt.gif" width="143" height="28" /></a></h3>
		  <h3><a href="#"><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
img/log-txt.gif" width="120" height="27" /></a></h3>
		  <h3><a href="http://www.php100.com"><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
img/loglt-txt.gif" width="143" height="27" /></a></h3>
	   <span id="hits">现在已经有[122]次点击</span>
  </div> 
  <div id="right-cnt">
	      <div class="col_center">
	        <div class="sub-title"><h2>促销活动</h2><span><a href="#" class="cblue">MORE</a></span><br class="clear" />
	        </div>
			<ul>
			<?php unset($this->_sections['l']);
$this->_sections['l']['name'] = 'l';
$this->_sections['l']['loop'] = is_array($_loop=$this->_tpl_vars['sm_news']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['l']['show'] = true;
$this->_sections['l']['max'] = $this->_sections['l']['loop'];
$this->_sections['l']['step'] = 1;
$this->_sections['l']['start'] = $this->_sections['l']['step'] > 0 ? 0 : $this->_sections['l']['loop']-1;
if ($this->_sections['l']['show']) {
    $this->_sections['l']['total'] = $this->_sections['l']['loop'];
    if ($this->_sections['l']['total'] == 0)
        $this->_sections['l']['show'] = false;
} else
    $this->_sections['l']['total'] = 0;
if ($this->_sections['l']['show']):

            for ($this->_sections['l']['index'] = $this->_sections['l']['start'], $this->_sections['l']['iteration'] = 1;
                 $this->_sections['l']['iteration'] <= $this->_sections['l']['total'];
                 $this->_sections['l']['index'] += $this->_sections['l']['step'], $this->_sections['l']['iteration']++):
$this->_sections['l']['rownum'] = $this->_sections['l']['iteration'];
$this->_sections['l']['index_prev'] = $this->_sections['l']['index'] - $this->_sections['l']['step'];
$this->_sections['l']['index_next'] = $this->_sections['l']['index'] + $this->_sections['l']['step'];
$this->_sections['l']['first']      = ($this->_sections['l']['iteration'] == 1);
$this->_sections['l']['last']       = ($this->_sections['l']['iteration'] == $this->_sections['l']['total']);
?>
			    <li><a href="view.php?id=<?php echo $this->_tpl_vars['sm_news'][$this->_sections['l']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['sm_news'][$this->_sections['l']['index']]['title']; ?>
</a></li>
			<?php endfor; endif; ?>	
		  </div>
	      <div class="col_center right">
	        <div class="sub-title"><h2>公司简介</h2><span><a href="#" class="cblue">MORE</a></span><br class="clear" /></div>
			<p id="intro">
			入贯彻落实科学发展观的自觉性和坚定性湖南一
考生高考4门课程故意考零分温家宝调研太湖污染代表
中央向居民致歉湖南73人涉黑集团麻醉强奸女服务员
被公诉女大学生卖淫被抓警察让其参加毕被公诉女大学生卖淫被抓警察让其参加毕...[<a href="#" class="cgray">详细</a>]           </p>
		  </div><br class="clear" />
		  <div id="m_adv"><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
img/m-adv.gif" width="630" height="146" /></div>
		  
		    <div class="pages"><h2>产品展示</h2><span>产品分类：展示 | 展示 | 展示 | 展示 | 展示 | 展示 | 展示 | 展示 | 展示</span><div id="more"><a href="#" class="cblue">MORE</a></div>
		    <br class="clear" /></div>
			<ul id="products-list">
			    <li>
				<img src="<?php echo $this->_tpl_vars['t_dir']; ?>
img/product.jpg" alt=" " width="326" height="119" />
				<h3>产品展示</h3>
				<ul>
				    <li>规格：</li>
				    <li>产地：</li>
				    <li>价格：1200 <span>[<a href="#" class="cdred">详细</a>]</span></li>
				</ul>
				</li>
			    <li>
				<img src="<?php echo $this->_tpl_vars['t_dir']; ?>
img/product.jpg" alt=" " width="326" height="119" />
				<h3>产品展示</h3>
				<ul>
				    <li>规格：</li>
				    <li>产地：</li>
				    <li>价格：1200 <span>[<a href="#" class="cdred">详细</a>]</span></li>
				</ul>
				</li>
			    <li>
				<img src="<?php echo $this->_tpl_vars['t_dir']; ?>
img/product.jpg" alt=" " width="326" height="119" />
				<h3>产品展示</h3>
				<ul>
				    <li>规格：</li>
				    <li>产地：</li>
				    <li>价格：1200 <span>[<a href="#" class="cdred">详细</a>]</span></li>
				</ul>
				</li>
			    <li>
				<img src="<?php echo $this->_tpl_vars['t_dir']; ?>
img/product.jpg" alt=" " width="326" height="119" />
				<h3>产品展示</h3>
				<ul>
				    <li>规格：</li>
				    <li>产地：</li>
				    <li>价格：1200 <span>[<a href="#" class="cdred">详细</a>]</span></li>
				</ul>
				</li>
			</ul><br class="clear" />
  </div>
  
  <br class="clear" />
</div>
<div id="about">
     <div class="content">
	      <span class="left"><a href="#">网店首页</a> | <a href="#">公司介绍</a> | <a href="#">资质认证</a> | <a href="#">产品展示</a> | <a href="#">视频网店</a> | <a href="#">招商信息</a> | <a href="#">招聘信息</a> | <a href="#">促销活动</a> | <a href="#">企业资讯</a> | <a href="#">联系我们</a></span>
		  <span class="right">我的邮件：<?php echo $this->_tpl_vars['sm_config'][5]; ?>
</span>
	 </div>
</div>
<p id="copyright">
</p>
</body>
</html>