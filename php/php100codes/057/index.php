<?php
/**
 * PHP100数据库备份系统
 * www.php100.com
 */
//---需要设置的变量信息
$user = "admin";//系统管理员用户名
$pass = "e10adc3949ba59abbe56e057f20f883e";//该密码是md5加密值，初始值为123456,密码格式也可以写成：$pass = md5("123456");
$url = "http://localhost/PHP/";//网址设置，必须配置好该网址，否则系统是会出错的噢！记得最后得有“/”
$lang = "gbk";//该功能是数据库要导入时，如果MYSQL高于4.0.x版本时，需要设置的语言编码格式！呵呵～

//----从这里开始，您就不要去设置了噢！下面的信息无所谓的！
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbdata = "";

header("Content-type: text/html; charset=gbk");
error_reporting(E_ALL & ~E_NOTICE);
ob_start();
@set_time_limit(0);
function error($msg="",$url2="index.php")
{
	global $url;
	die("<script language=javascript>alert('友情提示：\\n\\n\\t".$msg."\\n');location.href='".$url.$url2."'</script>");
	return true;
}

function set_sql_cookie($act="backup")
{
	global $url,$dbhost,$dbuser,$dbpass,$dbdata;
	echo "<title>设置数据库信息 - PHP100备份系统</title>\n";
	echo "<style type='text/css'>\nbody\n{\tbody:normal 14px '宋体','Tahoma','Arial';\n}\n</style>\n";
	echo "请设置好数据库服务器、账号、密码及数据库的名称等参数信息！";
	echo "<form method='post' action='".$url."index.php?act=".$act."&set=cookie'>\n";
	echo "服务器 <input type='text' name='db_host' value='".$dbhost."' style='width:150px;height:20px;'><br />\n";
	echo "账&nbsp; 号 <input type='text' name='db_user' value='".$dbuser."' style='width:150px;height:20px;'><br />\n";
	echo "密&nbsp; 码 <input type='password' name='db_pass' value='".$dbpass."' style='width:150px;height:20px;'><br />\n";
	echo "名&nbsp; 称 <input type='text' name='db_data' value='".$dbdata."' style='width:150px;height:20px;'><br /><br />\n";
	echo "<input type='submit' value='确认'> <input type='reset' value='重置'></form>\n";
	die();
	return true;
}

function chk_get_set($act="backup")
{
	global $url,$dbhost,$dbuser,$dbpass,$dbdata;
	$db_host = $_POST["db_host"];
	$db_user = $_POST["db_user"];
	$db_pass = $_POST["db_pass"];
	$db_data = $_POST["db_data"];
	if(empty($db_host) || empty($db_user) || empty($db_data)) error("数据库服务器、账号及数据库名称是不能为空","index.php?act=".$act);
	@mysql_connect($db_host,$db_user,$db_pass) or error("无法连接到服务器上，请检查","index.php?act=".$act);
	@mysql_select_db($db_data) or error("无法连接到数据库！请检查！","index.php?act=".$act);
	$msg = $act == "recover" ? "恢复" : "备份";
	if($act == "backup" && !file_exists($db_data)) mkdir($db_data);//创建数据库名称！
	if($act == "recover" && !file_exists($db_data)) error("文件夹 ".$db_data." 不存在！","index.php?act=".$act);
	setcookie("qinggan_db",$db_host."___".$db_user."___".$db_pass."___".$db_data);//设置服务器的COOKIE
	@mysql_close();//关闭数据库连接
	error("数据库信息已经配置完成，将进行下一步操作：\\n\\n\\t\\t".$msg."数据！","index.php?act=".$act);
	return true;
}

function sql_connect($cookie_db)
{
	global $lang;
	$dbarray = explode("___",$cookie_db);
	mysql_connect($dbarray[0],$dbarray[1],$dbarray[2]);//连接信息
	if(mysql_get_server_info()>"4.1") mysql_query("SET NAMES '".$lang."'");
	if(mysql_get_server_info()>"5.0.1") mysql_query("SET sql_mode=''");
	mysql_select_db($dbarray[3]);
	return true;
}

function sql_query($sql="")
{
	if(empty($sql)) return false;
	$query = mysql_query($sql);
	return $query;
}

function sql_fetch_array($query)
{
	if(empty($query)) return false;
	$rows = mysql_fetch_array($query);
	return $rows;
}

function table2sql($table)
{
	$tabledump = "DROP TABLE IF EXISTS ".$table.";\n";
	$query = sql_query("SHOW CREATE TABLE ".$table);
	$rows = sql_fetch_array($query);
	$tabledump .= $rows[1].";\n\n";
	return $tabledump;
}

function errmsg($msg="",$url2="index.php")
{
	global $url;
	echo "<script language=\"JavaScript\">\nfunction moveNew(){\nlocation.href=\"".$url.$url2."\";\n}\nwindow.setTimeout('moveNew()','2000');\n</script>";
	echo $msg;
	echo "<br /><br />";
	echo "如果您的系统不支持跳转或系统长时间未跳转，请手动点击操作！";
	echo "<input type='button' onclick=\"window.location='".$url.$url2."'\" value='手动点击跳转'>";
	die();
	return true;
}

function read_msg($file)
{
	if($handle=@fopen($file,"rb"))
	{
		$file_data=fread($handle,filesize($file));
		fclose($handle);
	}
	return $file_data;
}

function recover_data($sql)
{
	$sql=str_replace("\r","\n",$sql);
	$sql_array=explode(";\n",$sql);
	foreach($sql_array as $key=>$value)
	{
		$value = trim($value);
		if($value == "#" || $value == "--")
		{
			$queryy = explode("\n",$value);
			$value = '';
			foreach($queryy as $v2)
			{
				if($v2[0]!='#') $value.=$v2;
			}
		}
		if($value)
		{
			$value=trim(str_replace("\n","",$value));
			if(get_cfg_var("magic_quotes_gpc")) stripslashes($value);
			sql_query($value);
		}
	}
	return true;
}

$cookie_chk = $_COOKIE["qinggan_userchk"];
$cookie_db = $_COOKIE["qinggan_db"];
if($cookie_chk)
{
	if($cookie_chk != $user."___".md5($pass)) header("Location:".$url."index.php");
}
$act = $_GET["act"] ? $_GET["act"] : $_POST["act"];
@$act_set = $_GET["set"];
if($act == "backup")
{
	echo "<title>当前正在备份信息... - PHP100网站备份系统 - www.PHP100.com</title>";
	if(empty($cookie_chk)) error("需要用户验证账号和密码！");
	if($act_set == "cookie") chk_get_set($act);
	if(empty($cookie_db)) set_sql_cookie($act);
	sql_connect($cookie_db);//连接数据库
	$dbarray = explode("___",$cookie_db);
	$table_list = mysql_list_tables($dbarray[3]);//列出所有表格
	$table_count = mysql_num_rows($table_list);//呵呵获取表格总数
	if(!file_exists($dbarray[3]."/".$dbarray[3].".sql"))
	{
		//-----备份数据表信息
		$array = array();
		for($i=0;$i<mysql_num_rows($table_list);$i++)
		{
			$table = mysql_tablename($table_list,$i);//
			$array[$i] = table2sql($table);
		}
		$msg = implode("\n",$array);
		$handle = fopen($dbarray[3]."/".$dbarray[3].".sql","wb");
		if(!get_cfg_var("magic_quotes_gpc")) addslashes($msg);
		fputs($handle,$msg);
		fclose($handle);
		unset($msg);
	}
	//-----表格
	@$tableid = $_GET["tableid"] ? intval($_GET["tableid"]) : 0;
	@$startid = $_GET["startid"] ? intval($_GET["startid"]) : 0;
	@$pageid = $_GET["pageid"] ? intval($_GET["pageid"]) : 0;
	//-----开始内容备份
	if(($tableid+1)<$table_count)
	{
		$table = mysql_tablename($table_list,$tableid);
		$query = sql_query("select count(*) as count from `".$table."`");
		$num = sql_fetch_array($query);
		$count = $num["count"];//获取个数
		$per_size = 1000;//最大数不超过1000
		if($count<$per_size) $per_size = $count;
		if($count && $startid < $count)
		{
			$query = sql_query("select * from `".$table."` limit ".$startid.",".$per_size);//
			$numfields = mysql_num_fields($query);
			$tabledump = "";
			while($rows = mysql_fetch_row($query))
			{
				$tabledump .= "INSERT INTO $table VALUES (";
				$comma = '';
				for($i = 0; $i < $numfields; $i++)
				{
					$tabledump .= $comma.('\''.mysql_escape_string($rows[$i]).'\'');
					$comma = ',';
				}
				$tabledump .= ");\n";
				//---------------
				$startid++;
				if(strlen($tabledump)>(2048*1024))
				{
					$handle = fopen($dbarray[3]."/".$table."_".$pageid.".sql.","wb");
					if(!get_cfg_var("magic_quotes_gpc")) addslashes($tabledump);
					fputs($handle,$tabledump);
					fclose($handle);
					unset($tabledump);//清空内容！
					errmsg("正在备份数据表 ".$table." 信息，当前已经写入第 ".($pageid+1)." 页，即将写入第 ".($pageid+2)." 页信息","index.php?act=backup&tableid=".$tableid."&startid=".($startid)."&pageid=".($pageid+1));
				}
			}
			//----
			if($tabledump)
			{
				if($pageid>0)
				{
					@$msg = file_get_contents($dbarray[3]."/".$table."_".($pageid-1).".sql");
					if(strlen($msg) < (2048*1024))
					{
						$handle = fopen($dbarray[3]."/".$table."_".($pageid-1).".sql","ab");
						if(!get_cfg_var("magic_quotes_gpc")) addslashes($tabledump);
						fputs($handle,$tabledump);
						fclose($handle);
						unset($tabledump,$msg);
						$newpageid = $pageid;
					}
					else
					{
						$handle = fopen($dbarray[3]."/".$table."_".$pageid.".sql","wb");
						if(!get_cfg_var("magic_quotes_gpc")) addslashes($tabledump);
						fputs($handle,$tabledump);
						fclose($handle);
						unset($tabledump);
						$newpageid = $pageid + 1;
					}
				}
				else
				{
					$handle = fopen($dbarray[3]."/".$table."_".$pageid.".sql","wb");
					if(!get_cfg_var("magic_quotes_gpc")) addslashes($tabledump);
					fputs($handle,$tabledump);
					fclose($handle);
					unset($tabledump);
					$newpageid = $pageid + 1;
				}
			}
			if($startid<$count)
			{
				errmsg("正在备份数据表 ".$table." 信息。","index.php?act=backup&tableid=".$tableid."&startid=".($startid)."&pageid=".$newpageid);
			}
			else
			{
				//------
				errmsg("数据表 ".$table." 信息已经备份完毕，将开始备份下一个数据表！","index.php?act=backup&tableid=".($tableid+1));
			}
		}
		else
		{
			errmsg("数据表 ".$table." 信息为空，将开始下一个数据表信息备份","index.php?act=backup&tableid=".($tableid+1));
		}
	}
	else
	{
		setcookie("qinggan_db","");//清空数据库COOKIE信息
		setcookie("qinggan_userchk","");//清空用户验证信息
		error("数据已经备份完毕！","index.php");
	}
}
elseif($act == "recover")
{
	echo "<title>恢复数据表信息 - PHP100网站备份系统 - www.PHP100.com</title>";
	if(empty($cookie_chk)) error("需要用户验证账号和密码！");
	if($act_set == "cookie") chk_get_set($act);
	if(empty($cookie_db)) set_sql_cookie($act);
	sql_connect($cookie_db);//连接数据库
	$dbarray = explode("___",$cookie_db);
	$sql = read_msg($dbarray[3]."/".$dbarray[3].".sql");
	recover_data($sql);
	errmsg("数据表结构已经恢复，正在恢复数据信息！","index.php?act=recover_data");
}
elseif($act == "recover_data")
{
	echo "<title>恢复数据信息 - PHP100网站备份系统 - www.PHP100.com</title>";
	if(empty($cookie_chk)) error("需要用户验证账号和密码！");
	if($act_set == "cookie") chk_get_set($act);
	if(empty($cookie_db)) set_sql_cookie($act);
	sql_connect($cookie_db);//连接数据库
	$dbarray = explode("___",$cookie_db);
	//-----
	$table_list = mysql_list_tables($dbarray[3]);//列出所有表
	$table_count = mysql_num_rows($table_list);//呵呵获取表总数
	$tableid = $_GET["tableid"] ? intval($_GET["tableid"]) : 0;
	$pageid = $_GET["pageid"] ? intval($_GET["pageid"]) : 0;
	$table = mysql_tablename($table_list,$tableid);
	if(($tableid+1)<$table_count)
	{
		if(!file_exists($dbarray[3]."/".$table."_".$pageid.".sql"))
		{
			errmsg("数据表 ".$table." 信息不存在或未曾备份！","index.php?act=recover_data&tableid=".($tableid+1));
		}
		$sql = read_msg($dbarray[3]."/".$table."_".$pageid.".sql");
		if($sql) recover_data($sql);
		if(file_exists($dbarray[3]."/".$table."_".($pageid+1).".sql"))
		{
			errmsg("正在恢复数据表 ".$table." 信息","index.php?act=recover_data&tableid=".$tableid."&pageid=".($pageid+1));
		}
		else
		{
			errmsg("已经恢复数据表 ".$table." 信息，将恢复下一个数据表信息！","index.php?act=recover_data&tableid=".($tableid+1));
		}
	}
	else
	{
		setcookie("qinggan_userchk","");
		setcookie("qinggan_db","");
		error("数据信息均已经恢复完毕！","index.php");
	}
}
elseif($act == "check")
{
	$chk_user = $_POST["chk_user"];
	$chk_pass = $_POST["chk_pass"];
	if(empty($chk_user) || empty($chk_pass)) error("账号或密码不能为空");
	if($chk_user != $user || md5($chk_pass) != $pass) error("账号或密码不正确！");
	setcookie("qinggan_userchk",$chk_user."___".md5($pass));//设置cookie信息
?>
<title>选择操作项目 - PHP100网站备份系统 - www.PHP100.com</title>
<style type="text/css">
body
{
	font:normal 14px '宋体','Tahoma','Arial';
}
</style>
请选择您要操作的项目！<br /><br />
<input type="button" onclick="window.location='index.php?act=backup'" value="备份数据"><br /><br />
<input type="button" onclick="window.location='index.php?act=recover&iftable=yes'" value="恢复数据"><br />
<?php
}
else
{
	setcookie("qinggan_userchk","");
	setcookie("qinggan_db","");
?>
<title>验证账号 - PHP100网站备份系统 - www.PHP100.com</title>
<style type="text/css">
body
{
	font:normal 14px '宋体','Tahoma','Arial';
}
</style>
在操作之前您需要输入账号和密码进行身份确认！
<form method="post" action="index.php?act=check">
账号：<input type="text" name="chk_user" style="width:150px;height:20px;"><br />
密码：<input type="password" name="chk_pass" style="width:150px;height:20px;"><br /><br />
<input type="submit" value="确认"> <input type="reset" value="重填"></form>
<?php
}
ob_end_flush();
?>
<br /><br />
备份原理：

<blockquote>
<li>一表一文件！<a href="http://www.php100.com">PHP100数据库备份系统</a>
<li>单表文件大于2048K时，自动创建新文件！
<li>首次生成数据结构表！该表起总纲作用！
<li>同目前主流的备份程序不一样！本系统生成sql文件——是否兼容phpmyadmin创建的表未验证！
</blockquote>
