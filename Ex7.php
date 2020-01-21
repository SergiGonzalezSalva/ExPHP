<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="Ex7.php">
  	First name:<br>
  	<input type="text" name="n" value="Mickey">
  	<br>
  	Age:<br>
  	<input type="text" name="age" value="">
  	<br><br>
 	 <input type="submit" value="Send">
	</form>

	<?php
	$name = $_REQUEST["n"];
	$age = $_REQUEST["age"];

	if ($age >= 18) {
		echo $name." is an adult";
	} else {
		echo $name." isn't an adult";
	}
	?>
</body>
</html>