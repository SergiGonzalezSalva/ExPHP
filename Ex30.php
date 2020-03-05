<!DOCTYPE html>
	<html>
		<head>
		</head>
		<body>
			<form method="post" action="">
				<input type="radio" name="cat" value="Deportes"> Deportes <br>
				<input type="radio" name="cat" value="Politica"> Politica <br>
				<input type="radio" name="cat" value="Economia"> Economia <br>
				<input type="radio" name="cat" value="Todas"> Todas <br>
				<input type="submit" value="Enviar">
			</form>
			<?php
			if (isset($_REQUEST['cat'])) {
			 	
			  
				$cat=$_REQUEST['cat'];
				if ($cat == "Todas") {
					unset($_COOKIE["cat"]);
					setcookie("cat", null,-1);
				}
				else {
					setcookie("cat", $cat, time()+3600);
				}
			}

				if ($cat == "Deportes" || $cat == "Todas") {
					echo "<p>Noticia deportes</p>";
				}

				if ($cat == "Politica" || $cat == "Todas") {
					echo "<p>Noticia política</p>";
				}

				if ($cat == "Economia" || $cat == "Todas") {
					echo "<p>Noticia economía<p>";
				}
				
			?>
			
		</body>
	</html>