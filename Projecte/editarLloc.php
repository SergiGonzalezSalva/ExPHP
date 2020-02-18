<?php
	include("cap.php");
?>
	<?php
		require('connexio.php');
		$sql="SELECT * FROM lloc WHERE id='".$_GET['id']."'";
		$rs = mysqli_query($con,$sql) or die();
		$row=mysqli_fetch_array($rs);
	?>
<h1>FORM EDIT HOTEL.</h1>
	<form action="editaLloc.php" method="post">
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
			NOM:<input type="text" name="nom" value="<?php echo $row['nom']; ?>" /><br/>
			PLANTA:<input type="text" name="planta" value="<?php echo $row['planta']; ?>" /><br/>
			BLOC:<input type="text" name="bloc" value="<?php echo $row['bloc']; ?>"/><br/>
			<select  name="tipus">
			<?php 
			$sql2 = "SELECT * FROM tipus_lloc ORDER BY nom";
			$rs2 = mysqli_query($con, $sql2) or die();
			while($row2 = mysqli_fetch_array($rs2)){
			if($row['id_tipus']==$row2['id']){
				echo "<option value='".$row2['id']."' selected='selected' >";
			}
			else {
				echo "<option value='".$row2['id']."' >";
			}
			echo $row2['nom'];
			echo "</option>";
		}
		require('close.php');
		?>
			<input type="submit" value="EDITA"/>
	</form>
<?php
	include("footer.php");
?>