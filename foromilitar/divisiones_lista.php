<?php
require_once "includes/config.php";

$sql = "SELECT * FROM venta_de_armas";
$res = mysqli_query($conn, $sql);

if (!$res) {
    die('Error de Consulta: ' . mysqli_errno($conn));
}

$dou = mysqli_fetch_all($res,MYSQLI_ASSOC);

$section = "vistas/divisiones_lista.php";
require_once "vistas/layout.php";