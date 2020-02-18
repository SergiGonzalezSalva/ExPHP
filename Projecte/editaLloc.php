<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	require('connexio.php');

		$sql = "UPDATE lloc SET nom = '".$_REQUEST['nom']."', 
								planta = '".$_REQUEST['planta']."', 
								bloc = '".$_REQUEST['bloc']."',
								id_tipus = '".$_REQUEST['tipus']."'
								WHERE lloc.id = '".$_REQUEST['id']."'";

		mysqli_query($con, $sql) or die();
		echo "Update realitzat correctament.";

		header("location:taulaLloc.php");
		exit();
	require('close.php');
	?>
</body>
</html>