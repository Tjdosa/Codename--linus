<?php
	$dbhost = 'localhost';
	$dbuser = 'ConnectUsr';
	$dbpass = 'Password Hidden For Security Purposes';
	$db     = 'Database Name';
	
	
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	mysql_select_db($db);
?>
