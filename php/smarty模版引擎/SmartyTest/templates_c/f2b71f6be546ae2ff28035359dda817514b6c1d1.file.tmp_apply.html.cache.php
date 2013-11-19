<?php /* Smarty version Smarty-3.0.7, created on 2012-02-05 04:21:18
         compiled from "./templates\tmp_apply.html" */ ?>
<?php /*%%SmartyHeaderCode:72554f2e03be6e7ca1-54549487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2b71f6be546ae2ff28035359dda817514b6c1d1' => 
    array (
      0 => './templates\\tmp_apply.html',
      1 => 1328415674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72554f2e03be6e7ca1-54549487',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>

<?php  $_smarty_tpl->tpl_vars['company'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('arr_')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['company']->key => $_smarty_tpl->tpl_vars['company']->value){
?>
<?php echo $_smarty_tpl->tpl_vars['company']->value;?>
<br />
<?php }} ?>
</body>
</html>