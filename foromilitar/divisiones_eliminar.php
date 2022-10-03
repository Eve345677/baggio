<?php
require_once "includes/config.php";

$sql = "DELETE FROM venta_de_armas WHERE id = ".$_GET['id']."";
$res = mysqli_query($conn, $sql);

if (!$res) {
    die('Error de Consulta: ' . mysqli_errno($conn));
}

header("Location: divisiones_lista.php");
