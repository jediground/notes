<?php /* Smarty version Smarty-3.0.7, created on 2012-02-05 03:25:28
         compiled from "./templates\using.html" */ ?>
<?php /*%%SmartyHeaderCode:132174f2df6a80e4749-38886536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95ee61d944fa304c3a863e102d833fff7fcc1d4a' => 
    array (
      0 => './templates\\using.html',
      1 => 1328412324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132174f2df6a80e4749-38886536',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>
<?php $_template = new Smarty_Internal_Template("head.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title',"欢迎光临本站"); echo $_template->getRenderedTemplate();?><?php unset($_template);?><!-- smarty内置的引入模板方法 -->
<hr />
<?php  $_smarty_tpl->tpl_vars['con'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr_loop')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['con']->key => $_smarty_tpl->tpl_vars['con']->value){
?>
数组内容：<?php echo $_smarty_tpl->tpl_vars['con']->value;?>
<br />
<?php }} ?>
<hr />
<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr_loop_')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
<br />
<?php }} ?>
</body>
</html>