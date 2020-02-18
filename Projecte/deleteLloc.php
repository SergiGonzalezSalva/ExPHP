<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	require('connexio.php');
	$sql = "DELETE FROM lloc WHERE id='".$_REQUEST['id']."'";
	mysqli_query($con, $sql) or die();
	require('close.php');
	header("location:taulaLloc.php");
	exit();
	?>
</body>
</html>