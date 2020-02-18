<?php
include("cap.php");
?>
	<h1>Welcome SELECT.</h1>
	<a href="insertarLloc.php"><button type="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Nou LLoc</button></a><br/><br/>
	<table id='dt' class='table table-striped table-bordered' style='width:100%' >
		<thead>
			<tr><th>ID</th><th>Nom</th><th>Planta</th><th>Bloc</th><th>Tipus</th></tr>
		</thead>
		<tbody>
		<?php
		require('connexio.php');
		$sql="SELECT * FROM lloc"  or die();
		$rs = mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($rs)){
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['nom']."</td>";
		echo "<td>".$row['planta']."</td>";
		echo "<td>".$row['bloc']."</td>";
		echo "<td>".$row['id_tipus']."</td>";
		echo "<td><a href='editarLloc.php?id=".$row['id']."'><button type='button' class='btn btn-warning'>Editar</button></td>";
		echo "<td><a href='deleteLloc.php?id=".$row['id']."'><button type='button' class='btn btn-danger'>Borrar</button></a></td>";
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
<?php
include("footer.php");
?>