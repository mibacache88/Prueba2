<!DOCTYPE html>
<html>
<head>
	<title>Actualizar2.php</title>
</head>
<body>
	<?php
	mysql_connect("localhost:8081","prueba2","admin");
	mysql_select_db("prueba2");
	$sSQL="update user set username='$username' where id='$id'";
	mysql_query($sSQL);
	?>
	<h1><div align="center">Usuario actualizado</div></h1>
	<div align="center"><a href="lectura.php">Visualizar el contenido de usuarios</a></div>

</body>
</html>