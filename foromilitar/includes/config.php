<?php
$conn = mysqli_connect('localhost', 'root', '', 'base_foromilitar');

if (!$conn) {
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
}
?>