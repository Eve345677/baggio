<?php 
$base="catalogo2";
$con=mysqli_connect("localhost","root","",$base);
if (!$con){
    die("La conexion con la base de datos fallo". mysqli_connect_errno()."<br>");
}