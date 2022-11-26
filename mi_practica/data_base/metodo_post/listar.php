
<html lang="es">
<h3>LISTADO DE LOS REGISTRO DE LA TABLA</h3>
</html>


<?php 

$base = "gestion";
$Conexion =  mysqli_connect("localhost","root","",$base);
if($Conexion){
	echo "la conexion fue exitosa "."<br>";

}else{
	echo "la conexion ha fallado "."<br>";
}

$cadena= "SELECT * FROM persona WHERE 1";

$consulta = mysqli_query($Conexion,$cadena);


while(  $registro = mysqli_fetch_row($consulta)   ){
	echo $registro[0]." ".$registro[1].$registro[2]."<br>";
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<a href="menu.php">Volver</a>
	
</body>
</html>