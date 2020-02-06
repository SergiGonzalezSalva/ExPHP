<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$con = mysqli_connect("localhost","root","","epic");

	if (mysqli_connect_errno($con)) {
		echo "Error";
	}
	else{
		echo "Buena";
	}
	?>
</body>
</html>