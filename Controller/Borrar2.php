<!DOCTYPE html>
<html>
<head>
	<title>Borrar2</title>
</head>
<body>
	<?php
	mysql_connect("localhost:8081","prueba2","admin");
	mysql_select_db("prueba2");
	$sSQL="delete from user where id='$id'";
	mysql_query($sSQL);
	?>
	<h1><div align="center">Usuario Borrado</div></h1>
	<div align="center"><a href="lectura.php">Visualizar el contenido de los usuarios</a></div>

</body>
</html>