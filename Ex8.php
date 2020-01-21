<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="Ex8.php">
  	First name:<br>
  	<input type="text" name="n" value="Mickey">
  	<br>
  	<input type="radio" name="r" value="No Studies">No Studies<br>
  	<input type="radio" name="r" value="Primary School">Primary School<br>
  	<input type="radio" name="r" value="Secondary School">Secondary School<br>
  	<input type="radio" name="r" value="University">University<br>
  	<br><br>
 	 <input type="submit" value="Send">
	</form>
	<?php
	
	$i = $_REQUEST['r'];
	$name = $_REQUEST['n'];
	echo "Hi ".$name." your education level is ".$i;

	?>
</body>
</html>