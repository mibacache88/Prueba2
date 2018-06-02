<!DOCTYPE html>
<html>
<head>
	<title>Insertar.php</title>
</head>
<body>
	<?php
	mysql_connect("localhost:8081","prueba2","admin");
	mysql_select_db("prueba2");
	mysql_query("insert into user(email,password)values ('$email','$password')");
	mysql_query("insert into detail(genero,situacion_sentimental,fecha_nacimiento)values ('$genero','$situacion','$Nacimiento')");
	?>
	<h1><div align="center">Registros Insertados</div></h1>
	<div align="center"><a href="lectura.php">"Listar el contenido"</a> </div>
</body>
</html>