<?php

$db = sqlite_open("php100.db");
$sql = "select * from test";
$result = sqlite_query($db, $sql);

$row=sqlite_fetch_array($result);

print_r($row);



?>