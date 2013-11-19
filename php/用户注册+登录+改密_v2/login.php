
<?php
session_start();
include ('config.php');
if ($_POST[submit]) {
	$username = str_replace(" ", "", $_POST[user]);

	if($_POST[login] == "user"){
		$sql = "select * from `user_list` where `username`='$username'";
	}elseif($_POST[login] == "email"){
		$sql = "select * from `user_list` where `email`='$username'";
	}

	$query = mysql_query($sql);
	$row = mysql_fetch_array($query);

	if(is_array($row)){
	$us = is_array($row);
	$ps = $us ? md5($_POST[password] . ALL_PS) == $row[password] : FALSE;
	}
	if ($ps) {
		$_SESSION[id] = $row[id];
		$_SESSION[username] = $row[username];
		$_SESSION[user_shell] = md5($row[username] . $row[password] . ALL_PS);
		//		$_SESSION[times]=mktime();
		echo $row[username], ' 欢迎你！进入我的<a href="myzone.php">个人中心</a><br />';
		//		echo $_SESSION[username]."<br />";
		//		echo $_SESSION[id]."<br />";

	} else {
		echo "用户名或者密码错误";
		session_destroy();
		echo ' <a href="javascript:history.back(-1);">点击此处返回重试</a>';
	}


	}
}

?>