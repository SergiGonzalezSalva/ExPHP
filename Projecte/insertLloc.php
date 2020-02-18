<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	require('connexio.php');
		$sql = "INSERT INTO lloc (nom, planta, bloc, id_tipus) VALUES ('".$_REQUEST['nom']."',
																	 '".$_REQUEST['planta']."', 
																	 '".$_REQUEST['bloc']."', 
																	 '".$_REQUEST['tipus']."')";
	mysqli_query($con, $sql) or die();
		echo "Insert realitzat correctament.";

		header("location:taulaLloc.php");
		exit();
	require('close.php');
	?>
</body>
</html>