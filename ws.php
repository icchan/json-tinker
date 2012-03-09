<?php
header('Content-Type: application/json; charset=utf-8');
$db_host = 'mysql.bubblemix.net';
$db_user = 'jsonws';
$db_pwd = 'qwe123';

$database = 'jsonws';

if (!mysql_connect($db_host, $db_user, $db_pwd)) die("Can't connect to database");

if (!mysql_select_db($database)) die("Can't select database");

$sql = "SELECT json FROM webservices WHERE hash='" . $_GET["hash"] . "';";
$one = mysql_query($sql);
$row = mysql_fetch_row($one); 

if ($row) {
	echo $row[0];
	mysql_free_result($one);
} else {
	echo "{}";
}
?>