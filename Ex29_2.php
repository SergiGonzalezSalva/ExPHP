<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Cookie has been created. <br>
	<a href="Ex29.php">Go to Page</a>
	<?php
	setcookie("nom",$_REQUEST["n"],time()+60*60*24*365,"/");
	?>
</body>
</html>