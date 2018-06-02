<!DOCTYPE html>
<html>
<head>
	<title>Borrar1</title>
</head>
<body>
	<div align="center">
		<h1>Borrar un usuario</h1>
		<br>
		<?php
		mysql_connect("localhost:8081","prueba2","admin");
		mysql_select_db("prueba2");
		echo '<form method="post" action="borrar2.php">Id<br>';
		$sSQL="select id from user order by id";
		$result=mysql_query($sSQL);
		echo '<select id="id">';
		while($row=mysql_fetch_array($result))
		{
			echo '<option>'.row["id"];
		}
		mysql_free_result($result)
		?>
	</select>
	<br>
	<input type="submit" value="Borrar">
	</form>
	</div>

</body>
</html>