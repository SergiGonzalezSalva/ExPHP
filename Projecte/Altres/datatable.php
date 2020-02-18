<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
</head>
<body>
	<table id='dt' class='display' style='width:100%'>
		<thead>
		<tr><th>Id</th><th>nom</th><th>planta</th><th>bloc</th></tr>
		</thead>
		<tbody>
	<?php
		$con = mysqli_connect("localhost","root","","epic");
		$sql = "SELECT * FROM lloc ORDER BY id";
		$rs = mysqli_query($con, $sql) or die();
			while($row = mysqli_fetch_array($rs)){
				echo "<tr>";
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['nom']."</td>";
					echo "<td>".$row['planta']."</td>";
					echo "<td>".$row['bloc']."</td>";
				echo "</tr>";
			}
	?>
	</tbody>
	</table>

	<script>
		
		$(document).ready( function () {
	    	$('#dt').DataTable();
		} );

	</script>
</body>
</html>