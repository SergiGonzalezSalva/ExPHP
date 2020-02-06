<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="Ex9.php">
  	First name:<br>
  	<input type="text" name="n" value="Mickey">
  	<br>
  	<input type="checkbox" name="c1" value="Football">Football<br>
  	<input type="checkbox" name="c2" value="Tennis">Tennis<br>
  	<input type="checkbox" name="c3" value="Basket">Basketball<br>
  	<input type="checkbox" name="c4" value="Golf">Golf<br>
  	<br><br>
 	 <input type="submit" value="Send">
	</form>
	<?php
	$x = 0;
	echo $_REQUEST['n']."<br>";
	if(isset($_REQUEST["c1"])){
		echo $_REQUEST["c1"]."<br>";
		$x++;
	}
	if(isset($_REQUEST["c2"])){
		echo $_REQUEST["c2"]."<br>";
		$x++;
	}
	if(isset($_REQUEST["c3"])){
		echo $_REQUEST["c3"]."<br>";
		$x++;
	}
	if(isset($_REQUEST["c4"])){
		echo $_REQUEST["c4"]."<br>";
		$x++;
	}
	echo $x;
	?>
</body>
</html>