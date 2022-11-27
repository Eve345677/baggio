<html lang="es">
    <h3>Listado de Alumnos</h3>

<?php
$base= "administracion";
$Conexion=mysqli_connect("localhost","root","",$base);
if ($Conexion){
    echo "La coneccion con la base de datos fue un exito"."<br>";
}else {
    echo "La coneccion con la base de datos ha fracasado"."<br>";
}
$cadena="SELECT * FROM alumnos WHERE 1";
$resultado= mysqli_query($Conexion,$cadena);?>
<table border="1">
<tr>
    <td>id</td>
    <td>Nombre</td>
    <td>Apellido</td>
    <td>Edad</td>
    <td>Grado</td>
    <td>Clave</td>
</tr>
<?php while($registro=mysqli_fetch_row($resultado)){?>

    <tr><td><?php echo $registro[0];?></td> <td><?php echo $registro[1];?></td> <td><?php echo $registro[2];?></td><td><?php echo $registro[3];?></td><td><?php echo $registro[4];?></td><td><?php echo $registro[5]?></td></tr>
<?php } ?></table>


<head>
    <meta charset="UTF-8">
    <title>informacion de Subida de alumnos</title>
</head>

<body>
    <a href="home.php">Volver a casa</a>


</body>

</html>