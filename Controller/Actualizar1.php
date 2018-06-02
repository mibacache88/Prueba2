<!DOCTYPE html>
<html>
<head>
	<title>Actualizar1.php</title>
</head>
<body>
	<div align="center">
		<h1>Actualizar usuario</h1>
		<br>
		<?php
		mysql_connect("localhost:8081","prueba2","admin");
		mysql_select_db("prueba2");
		echo '<form method="post" action="actualizar2.php">ID<br>';
		$sSQL="select id from user order by id";
		$result=mysql_query($sSQL);
		echo '<select id="id">';
		while ($row=mysql_fetch_array($result)) {
			echo '<option>'.$row["id"];
		}
		?>
		
		</select>
		<br>
		Email<br>
		<input type="text" name="Email"><br>
		Pass<br>
		<input type="text" name="Pass"><br>
		Fecha Nacimiento<br>
		<input type="text" name="Nacimiento">
		Genero<br>
		<input type="text" name="Genero">
		Situacion Sentimental<br>
		<input type="text" name="Situacion">
		<input type="submit" value="Actualizar">
	</form>
	</div>

</body>
</html>