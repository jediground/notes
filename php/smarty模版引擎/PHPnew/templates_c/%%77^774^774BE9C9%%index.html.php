<?php /* Smarty version 2.6.26, created on 2012-02-11 04:36:11
         compiled from index.html */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>后台管理</TITLE>
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<META content=Alan name=Author><LINK rev=MADE
href="mailto:haowubai@hotmail.com"><LINK href="images/private.css"
type=text/css rel=stylesheet>
<META content="MSHTML 6.00.6000.16890" name=GENERATOR></HEAD>
<BODY>
<form action="index.php" method="post">	
	<TABLE class=navi cellSpacing=1 align=center border=0>
	 <?php $_from = $this->_tpl_vars['row_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['v']):
?>
		<tr>
	  		<td align="right"><?php echo $this->_tpl_vars['j']; ?>
:</td>
	 	 	<td><input type="text" name="<?php echo $this->_tpl_vars['j']; ?>
" value="<?php echo $this->_tpl_vars['v']; ?>
"/>  </td>
	   </tr>   
	 <?php endforeach; endif; unset($_from); ?>
	   <tr><td> <input type="submit" name="update" value='update' /></td></tr>
	</table> 
	
</form>	
</BODY>