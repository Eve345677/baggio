<html lang="es">
</html>
<?php
$nom=$_POST['nombre'];
$ape=$_POST['apellido'];
$edad=$_POST['edad'];
$grado=$_POST['grado'];
$clave=$_POST['clave'];
$base="administracion";
$Conexion=mysqli_connect("localhost","root","",$base);
if ($Conexion){
    echo "La coneccion con la base de datos fue exitosa"."<br>";
}else {
    echo "La coneccion con la base de datos ha fracasado"."<br>";
}
$cadena="UPDATE alumnos SET nombre = '$nom', apellido='$ape',edad='$edad',grado='$grado' WHERE clave='$clave'";
$resultado=mysqli_query($Conexion,$cadena);
if($resultado){
    echo "Se ha modificado a un alumno";
}else{
    echo "No se ha podido modificar al alumno";
    echo mysqli_error($Conexion);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>informacion de Modificacion de alumnos</title>
</head>

<body>
    <a href="view-alta.php">Volver al Formulario</a><br>
    <a href="home.php">Volver a casa</a>


</body>

</html>