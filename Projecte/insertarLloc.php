<?php
	include("cap.php");
?>
<h1>FORM INSERT HOTEL.</h1>
	<form action="insertLloc.php" method="post">
			NOM:<input type="text" name="nom" /><br/>
			PLANTA:<input type="text" name="planta" /><br/>
			BLOC:<input type="text" name="bloc" /><br/>
			TIPUS:<select  name="tipus">
		<?php 
		require('connexio.php');
		$sql2 = "SELECT * FROM tipus_lloc ORDER BY nom";
		$rs2 = mysqli_query($con, $sql2) or die();
		while($row2 = mysqli_fetch_array($rs2)){
			echo "<option value='".$row2['id']."' >";
			echo $row2['nom'];
			echo "</option>";
		}
		?>
			<input type="submit" value="INSERT"/>
	</form>
<?php
	include("footer.php");
?>