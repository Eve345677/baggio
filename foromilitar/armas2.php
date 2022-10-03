<?php
require_once "includes/config.php";
$sql = "SELECT * FROM ". $_GET['tabla']."  WHERE id = '" . $_GET['id'] . "';";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Fallo consulta: " . mysqli_error($conn);
    exit();
}
$mil = mysqli_fetch_assoc($result);

$section = "vistas/armas2.php";
require_once "vistas/layout.php";
?>