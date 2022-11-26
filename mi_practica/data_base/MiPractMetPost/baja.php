<html lang="es">

</html>
<?php
$clave = $_POST['clave'];
$base = "administración";
$Conexion = mysqli_connect("localhost", "root", "", $base);
if ($Conexion) {
    echo "La coneccion con la base de datos fue exitosa"."<br>";
} else {
    echo "La coneccion con la base de datos ha fracasado";
}
$cadena = "DELETE FROM alumnos WHERE clave= '$clave'";
$resultado = mysqli_query($Conexion, $cadena);
if ($resultado) {
    echo "Se ha Eliminado un alumno" . "<br>";
} else {
    echo "No se ha podido elimianr un alumno";
    echo mysqli_error($Conexion);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>informacion de Eliminacion de alumnos</title>
</head>

<body>
    <a href="view-baja.php">Volver al Formulario</a><br>
    <a href="home.php">Volver a casa</a>


</body>

</html>