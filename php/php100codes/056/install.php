<?php

  $files="data/config.php";

  if(!is_writable($files)){
  	echo "<font color=red>不可写！！！</font>";
  }else{
  	echo "<font color=green>可写</font>";
  }

  if(isset($_POST[install])){

    $config_str = "<?php";
	$config_str .= "\n";
	$config_str .= '$mysql_host		= "' . $_POST[db_host] . '";';
	$config_str .= "\n";
	$config_str .= '$mysql_user		= "' . $_POST[db_user] . '";';
	$config_str .= "\n";
	$config_str .= '$mysql_pass		= "' . $_POST[db_pass] . '";';
	$config_str .= "\n";
	$config_str .= '$mysql_dbname	= "' . $_POST[db_dbname] . '";';
	$config_str .= "\n";
	$config_str .= '$mysql_tag		= "' . $_POST[db_tag] . '";';
	$config_str .= "\n";
	$config_str .= '?>';

  	$ff = fopen($files, "w+");
	fwrite($ff, $config_str);

    //=====================
    include_once ("data/config.php"); //嵌入配置文件
    if (!@$link = mysql_connect($mysql_host, $mysql_user, $mysql_pass)) { //检查数据库连接情况
		echo "数据库连接失败! 请返回上一页检查连接参数 <a href=install.php>返回修改</a>";
	} else {
    mysql_query("CREATE DATABASE `$mysql_dbname`");
	mysql_select_db($mysql_dbname);
		$sql_query[] = "CREATE TABLE `" . $mysql_tag . "admin_log1` (
						  `id` int(8) unsigned NOT NULL auto_increment,
						  `username` varchar(40) NOT NULL COMMENT '操作用户名称',
						  `types` varchar(60) NOT NULL,
						  PRIMARY KEY  (`id`)
						) ;";
		$sql_query[] = "CREATE TABLE `" . $mysql_tag . "admin_log2` (
						  `id` int(8) unsigned NOT NULL auto_increment,
						  `username` varchar(40) NOT NULL COMMENT '操作用户名称',
						  `types` varchar(60) NOT NULL,
						  PRIMARY KEY  (`id`)
						) ;";
		$sql_query[] = "CREATE TABLE `" . $mysql_tag . "admin_log3` (
						  `id` int(8) unsigned NOT NULL auto_increment,
						  `username` varchar(40) NOT NULL COMMENT '操作用户名称',
						  `types` varchar(60) NOT NULL,
						  PRIMARY KEY  (`id`)
						) ;";
		foreach($sql_query as $val){
			mysql_query($val);
		}
      echo "<script>alert('安装成功!');location.href='index.php'</script>";
     rename("install.php","install.lock");



    }



  }





?>



 <LINK href="common.css" type=text/css rel=stylesheet>
 <hr size=1>
  <form action="" method="POST">
  填写主机：<input type="text" name="db_host" value=""/><br>
  用 户 名：<input type="text" name="db_user" value="root"/><br>
  密　　码：<input type="text" name="db_pass" value=""/><br>
  数据库名：<input type="text" name="db_dbname" value="php100_db"/><br>
  数据前缀：<input type="text" name="db_tag" value="p_"/><br>
  <button type=submit name=install>下一步</button>
  </form>

