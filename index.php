<link rel="stylesheet" href="includes/style.css">

<h1>Create A User</h1>
<form action="create.php" method="post">
<p>
<div id="div_Name">
<div>
<div id="div_name_label">
	First Name:
</div>
  <input id="inputName" type="text" name="inputName" value="" />
</div>
<div>
<div id="div_name_label">
	Last Name:
</div>
  <input id="inputName" type="text" name"inputLname" value=""/>
</div>
</div>  
  <br />
  <input id="inputDesc" name="inputDesc" type="text" value=""  />
</p>
<p>
  <input type="submit" name="submit" />
</p>


<?php

	include 'includes/connect.php';

	$query = "SELECT * FROM PEOPLE";

	$result = mysql_query ($query);
	
	while($person = mysql_fetch_array($result)) {
	
		echo "<h3>" . $person['Name'] . "</h3>";
		echo "<P>" . $person['Description'] . "</p>";
	}
?>

