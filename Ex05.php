<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$num = rand(1,3);
	if ($num == 3) {
		echo $num." THREE";
	} elseif ($num == 2) {
		echo $num." TWO";
	} else {
		echo $num." ONE";
	}
	?>
</body>
</html>