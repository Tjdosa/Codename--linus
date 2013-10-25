<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	include 'includes/connection.php';
	
	$name = $_POST('inputName');
	$desc = $_POST('inputDesc');
	
	if(!$_POST['submit']) {
		echo "please fill out the form";
		header('location: index.php');
	} else {
		mysql_query ("INSERT INTO people (`ID`,`Name`,`Description`)
					   VALUES (NULL,'$name','$desc'") or die (mysql_error());
					   
		echo "User has been added!";
		header ('Location: index.php');
		
	}
<body>
</body>
</html>