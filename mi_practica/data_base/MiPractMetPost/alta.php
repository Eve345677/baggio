<html lang="es">

</html>
<?php
$nom = $_POST['nombre'];
$ape = $_POST['apellido'];
$edad = $_POST['edad'];
$grado = $_POST['grado'];
$clave = $_POST['clave'];

echo $nom . " " . $ape . " " . $edad . " " . $grado . " " . $clave . " " . "<br>";

$base = "administración";
$Conexion = mysqli_connect("localhost", "root", "", $base);
if ($Conexion) {
    echo "La connecion con la base de datos fue un exito :)" . "<br>";
} else {
    echo "La connecion con la base de datos a fallado :(" . "<br>";
}
$cadena = "INSERT INTO alumnos(nombre,apellido,edad,grado,clave) VALUES ('$nom','$ape','$edad','$grado','$clave')";
$resultado = mysqli_query($Conexion, $cadena);
if ($resultado) {
    echo "Se ha Insertado un alumno en la base de datos"."<br>";
} else {
    echo "No se ha Insertado un alumno en la base de datos" . "<br>";

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>informacion de Subida de alumnos</title>
</head>

<body>
    <a href="view-alta.php">Volver al Formulario</a><br>
    <a href="home.php">Volver a casa</a>


</body>

</html>