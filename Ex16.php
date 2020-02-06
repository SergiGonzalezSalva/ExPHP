<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="Ex16.php" method="post">
		Username:<input type="text" name="n"> 
		Password:<input type="text" name="p">
		Repeat Password:<input type="text" name="p2">
		<br>
		<input type="submit" value="Send">
	</form>
	<?php
	function average($n1,$n2) {
		echo $n1;
		echo $n2;
		if ($n1 == $n2) {
			echo "Pass are equal";
		} else {
			echo "Pass not equal";		 
		}
		
		}

		$v1=$_REQUEST["p"];
		$v2=$_REQUEST["p2"];
		average($v1,$v2);
	?>
</body>
</html>