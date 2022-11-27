<html lang="es">

</html>


<?php

$ape = $_POST['apellido'];
$nom = $_POST['nombre'];
$ed = $_POST['edad'];

// salida de informacion
echo $ape . " " . $nom . " " . $ed . "<br>";

$base = "gestion";
$Conexion = mysqli_connect("localhost", "root", "", $base);
if ($Conexion) {
	echo "la conexion fue exitosa " . "<br>";

} else {
	echo "la conexion ha fallado " . "<br>";
}

$cadena = "INSERT INTO persona(apellido, nombre, edad) VALUES ('$ape','$nom','$ed')";


$resultado = mysqli_query($Conexion, $cadena);

if ($resultado) {
	echo "se ha insertado un registro" . "<br>";

} else {
	echo "NO se ha generado un registro" . "<br>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title align="center">Document</title>
</head>

<body>
	<a href="form-altas.php">Volver</a>

</body>

</html>