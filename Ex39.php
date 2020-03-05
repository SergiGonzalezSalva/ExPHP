<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

Name: <input type="text" name="n"> <br><br>
Email: <input type="email" name="e"> <br><br> 
Salary: <input type="number" name="s"> <br><br> 
<input type="submit" name="submit" value="Submit"><br><br>
</form>
 
<?php
   
if(isset($_POST['submit'])) {
   if ( isset($_REQUEST['s'])){ $s = $_REQUEST['s']; } else { $s = 0; };   
   printf("salary as a number with 8 digits: %'08d  €<br>",$s); 
   }

?>
</body>
</html>