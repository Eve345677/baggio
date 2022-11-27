<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Modificacion</title>
</head>
<body>

	<h3 style="text-align: center;">FORMULARIO DE MODIFICACION</h3>
	<form action="modificacion.php" method="POST" >
		Campo Clave Apellido: <input type="text" name="apellido"><br>	
		<br><br>
		Campos a modificar:<br>
		Nombre: <input type="text" name="nombre"><br>
		Edad: <input type="text" name="edad"><br>


		<input type="submit" value="Modificar"><br>
	</form>
	<a href="menu.php">Volver</a>
	
</body>
</html>