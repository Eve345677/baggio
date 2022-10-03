<?php
require_once 'includes/config.php';
session_start();
if (isset($_POST['valor']) && isset($_SESSION['usuario'])) {
	if (ctype_digit($_POST['valor'])) {
		$sql = "INSERT INTO donaciones(importe,usuario_id,fecha_alta) VALUES(" . $_POST['valor'] . "," . $_SESSION['usuario']['id'] . ",'" . date("Y-m-d h:i:s", time()) . "')";
		$query = mysqli_query($link, $sql);
		if (!$query) {
			die("Error: " . mysqli_error($link));
		}
		header("Location: donations.php?s=1");
	}
}

$section = "donations";
$title = "Colaboraciones";
require_once "views/layout.php";