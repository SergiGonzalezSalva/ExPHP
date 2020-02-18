<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css"/>
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css"/>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>


  <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
</head>
<body>
	<table id='dt' class='display responsive nowrap' style='width:100%'>
		<thead>
			<tr><th>id</th><th>nom</th><th>planta</th><th>bloc</th></tr>
		</thead>
		<tbody>
	<?php
		require('connection.php');
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
		require('close.php');
		?>
		</tbody>
	</table>
	<script>
		
		$(document).ready( function () {
	    	$('#dt').DataTable( {
	    	    dom: 'Bfrtip',
	    	    buttons: [
	    	        { 	extend:'copy', 
	    	        	attr: { id: 'bCopia' } 
	    	        }, 
	    	        	'csv', 'excel', 'pdf', 'print'
	    	    	]
	    	} );
		} );

	</script>
</body>
</html>