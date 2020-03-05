<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		$con = mysqli_connect("localhost","root","","epic");
		$sql="SELECT name FROM ALUMNOS WHERE email='$_REQUEST[email]'";
		$result = mysql_query($sql, $con);
		if ($row = mysql_fetch_array($result)){
		$_SESSION['user']=$row["name"];
		}else{
		echo "this email does not exist";
		}
	?>

</body>
</html>