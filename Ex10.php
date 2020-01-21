<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
	<form method="post" action="Ex10.php">
  	First name:<br>
  	<input type="text" name="n" value="Mickey">
	<select name="sal">
	<option value="1-1000€">1-1000€</option>
	<option value="1001-3000€">1001-3000€</option>
	<option value="+3000€">+3000€</option>
	</select>
	<br><br>
 	 <input type="submit" value="Send">
	</form>
	<?php
	echo $_REQUEST['n']."<br>";
	if ($_REQUEST["sal"] == "+3000€") {
		echo "Your salary is: ".$_REQUEST["sal"]." and you also have to pay taxes";
	} else {
		echo "Your salary is: ".$_REQUEST["sal"];
	}
	?>
</body>
</html>