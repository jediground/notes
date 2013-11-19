<?php /* Smarty version 2.6.26, created on 2009-11-24 13:49:12
         compiled from view.htm */ ?>
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
<div class="content"><br /> 
     <h2> <?php echo $this->_tpl_vars['row_news'][2]; ?>
<br />
       <br />
     </h2>
     时间：<?php echo $this->_tpl_vars['row_news'][4]; ?>
 作者：<?php echo $this->_tpl_vars['row_news'][3]; ?>
<br />
     <br />
     <hr />
     <br />
     <p><?php echo $this->_tpl_vars['row_news'][7]; ?>
</p>
     <br class="clear" />
</div>
<div id="about">
     <div class="content">
	      <span class="left"><a href="#">网店首页</a> | <a href="#">公司介绍</a> | <a href="#">资质认证</a> | <a href="#">产品展示</a> | <a href="#">视频网店</a> | <a href="#">招商信息</a> | <a href="#">招聘信息</a> | <a href="#">促销活动</a> | <a href="#">企业资讯</a> | <a href="#">联系我们</a></span>
		  <span class="right">目前已有[2222]点击</span>
	 </div>
</div>
<p id="copyright">
</p>
</body>
</html>