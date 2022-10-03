<?php
require_once "includes/config.php";

$sql = "DELETE FROM ".$_GET['tabla']." WHERE arma = '".$_GET['nombre']."'";
$res = mysqli_query($conn, $sql);

if (!$res) {
    die('Error de Consulta: ' . mysqli_errno($conn));
}

header("Location: indices.php?tabla=".$_GET['tabla']."&categoria=".$_GET['categoria']."&titulo=".$_GET['titulo']."");
?>