<?php
require_once 'includes/config.php';
if (isset($_POST["insert"])) {
	$query = "SELECT * FROM usuarios WHERE user_name = '" . $_POST['username'] . "' AND password = MD5('" . $_POST['password'] . "') AND fecha_baja IS NULL";
	$rec = consulta($query, $link,1);
	if (is_array($rec)) {
		session_start();
		$_SESSION['usuario'] = $rec;
		$query = "SELECT r.rango FROM rango_usuario AS ru
			INNER JOIN rangos AS r
			ON ru.rango_id = r.id
			WHERE ru.usuario_id = " . $_SESSION['usuario']['id'] . " AND
			fecha_baja IS NULL";
		$rec = consulta($query, $link);
		if (count($rec) > 0) {
			$_SESSION['usuario']['rangos'] = $rec;
			print_r($_SESSION['usuario']['rangos']);
		}
		header('Location: my_profile.php');
	} else {
		$query = "SELECT * FROM usuarios WHERE email = '" . $_POST['username'] . "' AND password = MD5('" . $_POST['password'] . "') AND fecha_baja IS NULL";
		$rec = consulta($query, $link,1);
		if (is_array($rec)) {
			session_start();
			$_SESSION['usuario'] = $rec;
			$query = "SELECT r.rango FROM rango_usuario AS ru
			INNER JOIN rangos AS r
			ON ru.rango_id = r.id
			WHERE ru.usuario_id = " . $_SESSION['usuario']['id'] ." AND
			fecha_baja IS NULL";
			$rec = consulta($query, $link);
			if (count($rec) > 0) {
				$_SESSION['usuario']['rangos'] = $rec;
			}
			header('Location: my_profile.php');
		} else {
			header('Location: log_in.php?error=true');
		}
	}
} else {
	$title = "Iniciar sesión";
	$section = "log_in";
	require_once "views/layout.php";
}
