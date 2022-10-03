<?php
require_once 'includes/config.php';
if (isset($_POST["insert"])) {
	$query = "SELECT * FROM usuarios WHERE user_name = '" . $_POST['username'] . "' AND password = MD5('" . $_POST['password'] . "') AND fecha_baja IS NULL";
	$execute = mysqli_query($link, $query);
	if (!$execute) {
		die("Error: " . mysqli_error($link));
	}
	if (mysqli_num_rows($execute) == 1) {
		session_start();
		$_SESSION['usuario'] = mysqli_fetch_assoc($execute);
		$query = "SELECT r.rango FROM rango_usuario AS ru
			INNER JOIN rangos AS r
			ON ru.rango_id = r.id
			WHERE ru.usuario_id = " . $_SESSION['usuario']['id'] . " AND
			fecha_baja IS NULL";
		$execute = mysqli_query($link, $query);
		if (!$execute) {
			die("Error: " . mysqli_error($link));
		}
		if (mysqli_num_rows($execute) > 0) {
			$_SESSION['usuario']['rangos'] = mysqli_fetch_all($execute, MYSQLI_ASSOC);
			print_r($_SESSION['usuario']['rangos']);
		}
		header('Location: my_profile.php');
	} else {
		$query = "SELECT * FROM usuarios WHERE email = '" . $_POST['username'] . "' AND password = MD5('" . $_POST['password'] . "') AND fecha_baja IS NULL";
		$execute = mysqli_query($link, $query);
		if (!$execute) {
			die("Error: " . mysqli_error($link));
		}
		if (mysqli_num_rows($execute) == 1) {
			session_start();
			$_SESSION['usuario'] = mysqli_fetch_assoc($execute);
			$query = "SELECT r.rango FROM rango_usuario AS ru
			INNER JOIN rangos AS r
			ON ru.rango_id = r.id
			WHERE ru.usuario_id = " . $_SESSION['usuario']['id'] ." AND
			fecha_baja IS NULL";
			$execute = mysqli_query($link, $query);
			if (!$execute) {
				die("Error: " . mysqli_error($link));
			}
			if (mysqli_num_rows($execute) > 0) {
				$_SESSION['usuario']['rangos'] = mysqli_fetch_all($execute, MYSQLI_ASSOC);
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
