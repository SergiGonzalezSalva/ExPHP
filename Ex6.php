<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$num = 2;
	$x = 1;

	for ($i=1; $i <= 10; $i++) { 
		echo $num*$i."<br>";
	}
	echo "---------------- <br>";
	while ($x <= 10) {
		echo $num*$x."<br>";
		$x++;
	}
	$x = 1;
	echo "---------------- <br>";
	do {
		echo $num*$x."<br>";
		$x++;
	} while ($x <= 10);


	?>
</body>
</html>