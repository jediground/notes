<?php /* Smarty version 2.6.18, created on 2009-11-25 13:14:53
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'hit', 'index.html', 10, false),)), $this); ?>
<!--<?php $_from = $this->_tpl_vars['name']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>-->
<!--<?php echo $this->_tpl_vars['a']; ?>
<br>-->
<!--<?php endforeach; endif; unset($_from); ?>-->
<!--<?php echo $this->_tpl_vars['id']; ?>
-->



标题:<?php echo $this->_tpl_vars['row'][1]; ?>
<br>
<!--点击:<?php echo $this->_tpl_vars['row'][2]; ?>
次-->
点击:<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'hit')), $this); ?>
次