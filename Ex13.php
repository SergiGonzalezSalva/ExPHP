<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="Ex13_2.php" method="post">
	Client Name:<input type="text" name="n"> 
	Address:<input type="text" name="address">
	<br><br>
	Prosciutto:<input type="checkbox" name="c1" value="Prosciutto">
	Quantity:<select name="sel">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	</select><br>
	Napolitana:<input type="checkbox" name="c2" value="Napolitana">
	Quantity:<select name="sel2">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	</select><br>
	Mozzarella:<input type="checkbox" name="c3" value="Mozzarella">
	Quantity:<select name="sel3">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	</select><br>
	<input type="submit" value="Send">
	</form>
	<?php
	
	?>
</body>
</html>