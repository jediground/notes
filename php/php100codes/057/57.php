<?php
$mysql_dbname = "php100";
mysql_connect("localhost", "root", "");
mysql_select_db($mysql_dbname);

$sql_list = mysql_list_tables($mysql_dbname);
while ($row_data = mysql_fetch_row($sql_list)) {
	echo $row_data[0] . "<br>";
	get_table_fd($row_data[0], "sql");

	//  $fp=fopen("sql/$tablename.sql","w+");
	//  fwrite($fp,$field);
	//  fclose($fp);
}

function get_table_fd($tablename) {
	$field = "CREATE TABLE `$tablename`(\n";
	$result = mysql_query("select * from $tablename");
	while ($meta = mysql_fetch_field($result)) {
		if ($meta->not_null)
			$not_null = "not_null";
		$field .= "`$meta->name` $meta->type($meta->max_length) $not_null; \n";
	}
	$field .= ")\n";
	return $field;
}


?>