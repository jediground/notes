<?php /* Smarty version 2.6.18, created on 2009-11-23 14:14:37
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'capitalize', 'index.html', 2, false),array('modifier', 'count_characters', 'index.html', 3, false),array('modifier', 'cat', 'index.html', 4, false),array('modifier', 'count_paragraphs', 'index.html', 5, false),array('modifier', 'count_sentences', 'index.html', 6, false),array('modifier', 'count_words', 'index.html', 7, false),array('modifier', 'date_format', 'index.html', 8, false),array('modifier', 'default', 'index.html', 10, false),array('modifier', 'escape', 'index.html', 11, false),array('modifier', 'indent', 'index.html', 12, false),array('modifier', 'lower', 'index.html', 13, false),array('modifier', 'upper', 'index.html', 14, false),array('modifier', 'replace', 'index.html', 15, false),array('modifier', 'spacify', 'index.html', 17, false),array('modifier', 'string_format', 'index.html', 19, false),array('modifier', 'strip', 'index.html', 20, false),array('modifier', 'strip_tags', 'index.html', 21, false),array('modifier', 'truncate', 'index.html', 22, false),array('modifier', 'wordwrap', 'index.html', 23, false),)), $this); ?>
原始内容：<?php echo $this->_tpl_vars['name']; ?>
<hr>
<!--<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
-->
<!--<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('count_characters', true, $_tmp) : smarty_modifier_count_characters($_tmp)); ?>
-->
<!--<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('cat', true, $_tmp, "PHP演示") : smarty_modifier_cat($_tmp, "PHP演示")); ?>
-->
<!--<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('count_paragraphs', true, $_tmp) : smarty_modifier_count_paragraphs($_tmp)); ?>
-->
<!--<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('count_sentences', true, $_tmp) : smarty_modifier_count_sentences($_tmp)); ?>
-->
<!--<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('count_words', true, $_tmp) : smarty_modifier_count_words($_tmp)); ?>
-->
<!--<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
-->
<!--<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
-->
<!--<?php echo ((is_array($_tmp=@$this->_tpl_vars['name1'])) ? $this->_run_mod_handler('default', true, $_tmp, "没有时间") : smarty_modifier_default($_tmp, "没有时间")); ?>
-->
<!--<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
-->
<!--<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('indent', true, $_tmp, 10, "....") : smarty_modifier_indent($_tmp, 10, "....")); ?>
-->
<!--<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
-->
<!--<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
-->
<!--<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'is', "**") : smarty_modifier_replace($_tmp, 'is', "**")); ?>
-->
<!--<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'is', "**") : smarty_modifier_replace($_tmp, 'is', "**")); ?>
-->
<!--<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('spacify', true, $_tmp) : smarty_modifier_spacify($_tmp)); ?>
-->
<!--<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('spacify', true, $_tmp, '_') : smarty_modifier_spacify($_tmp, '_')); ?>
-->
<!--<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('string_format', true, $_tmp, '%.2f') : smarty_modifier_string_format($_tmp, '%.2f')); ?>
-->
<!--<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('strip', true, $_tmp, '_') : smarty_modifier_strip($_tmp, '_')); ?>
-->
<!--<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
-->
<!--<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, '...') : smarty_modifier_truncate($_tmp, 30, '...')); ?>
-->
<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 10, '<br>') : smarty_modifier_wordwrap($_tmp, 10, '<br>')); ?>