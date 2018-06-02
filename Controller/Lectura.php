<!DOCTYPE html>
<html>
<head>
	<title>lectura.php</title>
</head>
<body>
	<h1><div align="center">Lectura de la tabla</div></h1>
	<br>
	<br>
	<?php
	mysql_connect("localhost:8081","prueba2","admin");
	mysql_select_db("prueba2");
	$result=mysql_query("select * from detail");
	?>

	<table align="center">
		<tr>
			<th>Id</th>
			<th>Email</th>
			<th>Password</th>
			<th>Genero</th>
			<th>Situacion_Sentimental</th>
			<th>Fecha_Nacimiento</th>
		</tr>
		<?php
		while ($row=mysql_fetch_array($result)) {
			echo '<tr><td>'.$row["Id"].'</td>';
			echo '<tr><td>'.$row["Email"].'</td>';
			echo '<tr><td>'.$row["Password"].'</td>';
			echo '<tr><td>'.$row["Genero"].'</td>';
			echo '<tr><td>'.$row["Situacion_Sentimental"].'</td>';
			echo '<tr><td>'.$row["Fecha_Nacimiento"].'</td>';
		}
		mysql_free_result($result)
		?>
	</table>
	<div align="center">
	<a href="Insertar.html">Añadir nuevo usuario</a><br>
	<a href="actualizar1.php">Actualizar usuario</a><br>
	<a href="borrar1.php">Borrar usuario</a><br>
	</div>
</body>
</html>