<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'tecnol123';
	$db     = 'mysql_tut';
	
	
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	mysql_select_db($db);
?>