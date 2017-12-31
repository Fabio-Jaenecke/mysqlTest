<?php
$conn_error = 'Could not connect.';

$mysql_host = 'localhost';
$mysql_host = 'root';
$mysql_pass = '';

$mysql_db = 'a_database';

@mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die($conn_error);
mysql_select_db($mysql_db);

echo 'Connected!';

?>