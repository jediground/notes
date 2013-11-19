<?php /* Smarty version Smarty-3.0.7, created on 2012-02-05 03:52:46
         compiled from "./templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:121534f2dfd0e1d7e54-59849250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc1c3ef5cc9c08dc853f6b428d15c38ce0aa533a' => 
    array (
      0 => './templates\\index.html',
      1 => 1328411054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121534f2dfd0e1d7e54-59849250',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'D:\PHP2012\Apache2.2\htdocs\SmartyTest\smarty\plugins\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'D:\PHP2012\Apache2.2\htdocs\SmartyTest\smarty\plugins\modifier.truncate.php';
?><html>
<head>
<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
</head>
<body>
 <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('article')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total']);
?>	<!-- 循环数组(新闻内容)变量 -->
 <?php echo $_smarty_tpl->getVariable('article')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'];?>
 ----- <?php echo $_smarty_tpl->getVariable('article')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['date'];?>
<br />
 <?php endfor; endif; ?>
 <hr />
当前日期原始内容：<?php echo $_smarty_tpl->getVariable('date')->value;?>
<br />
转换后为：<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('date')->value,'%Y-%m-%d');?>


<!-- 这样写也可以，是smarty内置的 -->
smarty内置方法：<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>

<hr />
截取： <?php echo smarty_modifier_truncate($_smarty_tpl->getVariable('string')->value,20,'...');?>


 
</body>
</html>