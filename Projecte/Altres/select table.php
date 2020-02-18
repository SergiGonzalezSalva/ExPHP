<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$con = mysqli_connect("localhost","root","","epic");

		$sql="SELECT id, nom, planta, bloc FROM lloc"; 
		$rs = mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($rs)){
		echo "<p>";
		echo $row['id']." ";
		echo $row['nom']." ";
		echo $row['planta'];
		echo "</p>";
	}
	?>
</body>
</html>