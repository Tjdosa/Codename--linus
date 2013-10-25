<h1>Create A User</h1>
<form action="create.php" method="post">
<p>
  <input type="text" name="inputName" value="" />
  <br />
  <input name="inputDesc" type="text" value="" width="80%" height="50%" />
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

