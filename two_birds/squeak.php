
<?php
session_start();
require_once "includes/config.php";
if (isset($_SESSION['usuario']) && (isset($_GET['pref']) || isset($_GET['prem']) || isset($_GET['prey']) || isset($_POST['comentario']) || isset($_POST['like']) || isset($_POST['fav']) || isset($_POST['respuesta']))) {
	$id = $_SESSION['usuario']['cambio'];
} else {
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	} else {
		header("Location: forum.php");
	}
}

$query = "SELECT COUNT(il.informe_id),i.usuario_id,titulo,i.fecha_alta,i.fecha_modificacion,contenido,encabezado, (
			SELECT COUNT(*) FROM informe_vistas WHERE informe_id = " . $id . "
		) contador_vistas FROM informes AS i
		LEFT JOIN informe_likes AS il
			ON i.id = il.informe_id
		WHERE i.id = " . $id . " AND i.fecha_baja IS NULL
		GROUP BY il.informe_id";
$execute = mysqli_query($link, $query);
if (!$execute) {
	die("Error: " . mysqli_error($link));
}
if (mysqli_num_rows($execute) == 0) {
	header("Location: forum.php");
} else {
	$resultado = mysqli_fetch_assoc($execute);
}
if (is_array(!$resultado)) {
	die("No es array en linea 8");
}

$query = "SELECT user_name,rango FROM usuarios
INNER JOIN rango_usuario
ON usuarios.id = rango_usuario.usuario_id
INNER JOIN rangos
ON rango_usuario.rango_id = rangos.id
WHERE usuarios.id = " . $resultado['usuario_id'] . " AND
rango_usuario.fecha_baja IS NULL";
$execute = mysqli_query($link, $query);
if (!$execute) {
	die("Error: " . mysqli_error($link));
}
if (mysqli_num_rows($execute) == 0) {
	$propietario[0]['user_name'] = "UsuarioEliminado";
	$propietario['rango'] = 1;
} else {
	$propietario = mysqli_fetch_all($execute, MYSQLI_ASSOC);
	$mode = "user";
	foreach ($propietario as $ran) {
		if ($ran['rango'] == "admin") {
			$mode = "admin";
			break;
		} else if ($ran['rango'] == "mod") {
			$mode = "mod";
		}
	}

	$rangos = array(
		"user" => 1,
		"mod" => 2,
		"admin" => 3
	);

	$propietario['rango'] = $rangos[$mode];
}
$query = "SELECT categoria FROM categoria_informe AS ci
		INNER JOIN categorias AS c
		ON ci.categoria_id = c.id
		WHERE ci.informe_id = " . $id . " AND
		fecha_baja IS NULL";
$execute = mysqli_query($link, $query);
if (!$execute) {
	die("Error: " . mysqli_error($link));
}
$resultado['tags'] = mysqli_fetch_all($execute, MYSQLI_ASSOC);

$fecha = explode("-", $resultado['fecha_alta']);
$resultado['Year'] = $fecha[0];
$resultado['mes'] = $fecha[1];
$fecha = explode(" ", $fecha[2]);
$resultado['dia'] = $fecha[0];

$meses = array(
	"01" => "Enero",
	"02" => "Febrero",
	"03" => "Marzo",
	"04" => "Abril",
	"05" => "Mayo",
	"06" => "Junio",
	"07" => "Julio",
	"08" => "Agosto",
	"09" => "Septiembre",
	"10" => "Octubre",
	"11" => "Noviembre",
	"12" => "Diciembre",
);

$resultado['mes'] = $meses[$resultado['mes']];

if (isset($resultado['fecha_modificacion'])) {
	$fecha = explode("-", $resultado['fecha_modificacion']);
	if (count($fecha) == 3) {
		$resultado['Year_m'] = $fecha[0];
		$resultado['mes_m'] = $fecha[1];
		$fecha = explode(" ", $fecha[2]);
		$resultado['dia_m'] = $fecha[0];
		$resultado['mes_m'] = $meses[$resultado['mes_m']];
	}
}
$fecha =  date("Y-m-d h:i:s", time());

$query = "SELECT COUNT(*) FROM informe_likes WHERE fecha_baja IS NULL AND informe_id = " . $id;
	$execute = mysqli_query($link, $query);
	if (!$execute) {
		die("Error: " . mysqli_error($link));
	}

	$recuperacion = mysqli_fetch_assoc($execute);
	$resultado['likes'] = $recuperacion['COUNT(*)'];

if (isset($_SESSION['usuario'])) {
	if (isset($_GET['pref']) || isset($_GET['prem']) || isset($_GET['prey']) || isset($_POST['comentario']) || isset($_POST['like']) || isset($_POST['fav']) || isset($_POST['respuesta'])) {
		$change = true;
	} else {
		if (isset($_GET['id'])) {
			$_SESSION['usuario']['cambio'] = $_GET['id'];
		}
	}

	$query = "SELECT * FROM informe_vistas WHERE informe_id = " . $id . " AND usuario_id = " . $_SESSION['usuario']['id'];
	$execute = mysqli_query($link, $query);
	if (!$execute) {
		die("Error: " . mysqli_error($link));
	}
	if (mysqli_num_rows($execute) == 0) {
		$query = "INSERT INTO informe_vistas(usuario_id,informe_id,fecha_alta) VALUES(" . $_SESSION['usuario']['id'] . ",$id,'$fecha')";
		$execute = mysqli_query($link, $query);
		if (!$execute) {
			die("Error: " . mysqli_error($link));
		}
	}

	$query = "SELECT * FROM informe_likes WHERE fecha_baja IS NULL AND informe_id = " . $id . " AND usuario_id = " . $_SESSION['usuario']['id'];
	$execute = mysqli_query($link, $query);
	if (!$execute) {
		die("Error: " . mysqli_error($link));
	}

	if (mysqli_num_rows($execute) == 1) {
		$like = "likes.png";
	} else {
		$like = "like.png";
	}

	$query = "SELECT * FROM favoritos WHERE fecha_baja IS NULL AND informe_id = " . $id . " AND usuario_id = " . $_SESSION['usuario']['id'];
	$execute = mysqli_query($link, $query);
	if (!$execute) {
		die("Error: " . mysqli_error($link));
	}

	if (mysqli_num_rows($execute) == 1) {
		$fav = "stars.png";
	} else {
		$fav = "star.png";
	}
	$mode = "user";
	foreach ($_SESSION['usuario']['rangos'] as $ran) {
		if ($ran['rango'] == "admin") {
			$mode = "admin";
			break;
		} else if ($ran['rango'] == "mod") {
			$mode = "mod";
		}
	}

	$rangos = array(
		"user" => 1,
		"mod" => 2,
		"admin" => 3
	);

	$_SESSION['usuario']['rango'] = $rangos[$mode];
} else {
	$id = $_GET['id'];
}
$query = "SELECT usuarios.id,comentarios.id,comentario_padre_id,informe_id,comentario,user_name,foto FROM comentarios
INNER JOIN usuarios
ON comentarios.usuario_id = usuarios.id
WHERE comentarios.fecha_baja IS NULL AND informe_id = " . $id;
$execute = mysqli_query($link, $query);
if (!$execute) {
	die("Error: " . mysqli_error($link));
}
$comentarios = mysqli_fetch_all($execute, MYSQLI_ASSOC);

if (isset($_POST['titulo']) && isset($_SESSION['usuario']) && isset($_GET['pref'])) {
	$id = $_SESSION['usuario']['cambio'];
	preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $_POST['contenido'], $image);
	if (count($image) > 0) {
		file_put_contents('img/portadas/p' . $id . '.jpg', file_get_contents($image['src']));
	} else {
		$file = 'img/portadas/p' . $_SESSION['usuario']['cambio'] . '.jpg';
		if (file_exists($file)) {
			unlink($file);
		}
	}
	$query = "UPDATE informes SET titulo = '" . $_POST['titulo'] . "',contenido = '" . $_POST['contenido'] . "',fecha_modificacion = '" . $fecha . "',encabezado = '" . $_POST['encabezado'] . "'
	WHERE id = " . $id;
	$execute = mysqli_query($link, $query);
	if (!$execute) {
		die("Error: " . mysqli_error($link));
	}
	$query = "UPDATE categoria_informe SET fecha_baja = '" . $fecha . "'
	WHERE informe_id = " . $id;
	$execute = mysqli_query($link, $query);
	if (!$execute) {
		die("Error: " . mysqli_error($link));
	}
	$query = "INSERT INTO categoria_informe(informe_id,fecha_alta,categoria_id)
        VALUES(" . $id . ",'" . $fecha . "',";
	$cont_tags = 0;
	if (isset($_POST['flora'])) {
		$cont_tags++;
		if ($cont_tags != 1) {
			$query .= ",(" . $id . ",'" . $fecha . "',";
		}
		$query .= "1)";
	}
	if (isset($_POST['fauna'])) {
		$cont_tags++;
		if ($cont_tags != 1) {
			$query .= ",(" . $id . ",'" . $fecha . "',";
		}
		$query .= "2)";
	}
	if (isset($_POST['clima'])) {
		$cont_tags++;
		if ($cont_tags != 1) {
			$query .= ",(" . $id . ",'" . $fecha . "',";
		}
		$query .= "3)";
	}
	if (isset($_POST['oceano'])) {
		$cont_tags++;
		if ($cont_tags != 1) {
			$query .= ",(" . $id . ",'" . $fecha . "',";
		}
		$query .= "4)";
	}
	if (isset($_POST['medio_ambiente'])) {
		$cont_tags++;
		if ($cont_tags != 1) {
			$query .= ",(" . $id . ",'" . $fecha . "',";
		}
		$query .= "5)";
	}
	if (isset($_POST['medidas'])) {
		$cont_tags++;
		if ($cont_tags != 1) {
			$query .= ",(" . $id . ",'" . $fecha . "',";
		}
		$query .= "6)";
	}
	if (strlen($query) < 115) {
		header("Location: squeak.php?id=" . $_SESSION['usuario']['cambio']);
	}
	$execute = mysqli_query($link, $query);
	if (!$execute) {
		die("Error: " . mysqli_error($link));
	}
	header("Location: squeak.php?id=" . $_SESSION['usuario']['cambio']);
}

if (isset($_POST['eliminar']) && isset($_SESSION['usuario']) && isset($_GET['prem'])) {
	$query = "UPDATE informes SET fecha_baja = '$fecha' WHERE fecha_baja IS NULL AND id = " . $_SESSION['usuario']['cambio'];
	$file = 'img/portadas/p' . $_SESSION['usuario']['cambio'] . '.jpg';
	if (file_exists($file)) {
		unlink($file);
	}
	$execute = mysqli_query($link, $query);
	if (!$execute) {
		die("Error: " . mysqli_error($link));
	} else {
		header("Location: forum.php");
	}
}

if (isset($_POST['eliminar']) && isset($_SESSION['usuario']) && isset($_GET['prey'])) {
	$query = "INSERT INTO moderaciones(usuario_id, moderacion, informe_id,fecha_alta,tipo) VALUES(" . $_SESSION['usuario']['id'] . ", '" . $_POST['ban_info'] . "','" . $_SESSION['usuario']['cambio'] . "','$fecha','informe')";
	$execute = mysqli_query($link, $query);
	if (!$execute) {
		die("Error: " . mysqli_error($link));
	}
	$query = "UPDATE informes SET fecha_baja = '$fecha' WHERE fecha_baja IS NULL AND id = " . $_SESSION['usuario']['cambio'];
	$file = 'img/portadas/p' . $_SESSION['usuario']['cambio'] . '.jpg';
	if (file_exists($file)) {
		unlink($file);
	}
	$execute = mysqli_query($link, $query);
	if (!$execute) {
		die("Error: " . mysqli_error($link));
	} else {
		header("Location: forum.php");
	}
}

if (isset($_POST['comentario']) && isset($_SESSION['usuario'])) {
	$query = 'INSERT INTO comentarios(usuario_id,comentario,informe_id,fecha_alta) VALUES(' . $_SESSION['usuario']['id'] . ',"' . $_POST['comentario'] . '",' . $id . ',"' . $fecha . '")';
	$execute = mysqli_query($link, $query);
	if (!$execute) {
		die("Error: " . mysqli_error($link));
	} else {
		header("Location: squeak.php?id=" . $id . "&#comentarios");
	}
}

if (isset($_POST['like']) && isset($_SESSION['usuario'])) {
	$query = "SELECT * FROM informe_likes WHERE fecha_baja IS NULL AND informe_id = " . $id . " AND usuario_id = " . $_SESSION['usuario']['id'];
	$execute = mysqli_query($link, $query);
	if (!$execute) {
		die("Error: " . mysqli_error($link));
	}

	if (mysqli_num_rows($execute) == 1) {
		$query = "UPDATE informe_likes SET fecha_baja = '$fecha' WHERE fecha_baja IS NULL AND informe_id = " . $id . " AND usuario_id = " . $_SESSION['usuario']['id'];
		$execute = mysqli_query($link, $query);
		if (!$execute) {
			die("Error: " . mysqli_error($link));
		}
		header("Location: squeak.php?id=" . $id . "&#titulo");
	} else {
		$query = "INSERT INTO informe_likes(usuario_id,informe_id,fecha_alta) VALUES(" . $_SESSION['usuario']['id'] . "," . $id . ",'$fecha')";
		$execute = mysqli_query($link, $query);
		if (!$execute) {
			die("Error: " . mysqli_error($link));
		}
		header("Location: squeak.php?id=" . $id . "&#titulo");
	}
}
if (isset($_POST['fav']) && isset($_SESSION['usuario'])) {
	$query = "SELECT * FROM favoritos WHERE fecha_baja IS NULL AND informe_id = " . $id . " AND usuario_id = " . $_SESSION['usuario']['id'];
	$execute = mysqli_query($link, $query);
	if (!$execute) {
		die("Error: " . mysqli_error($link));
	}

	if (mysqli_num_rows($execute) == 1) {
		$query = "UPDATE favoritos SET fecha_baja = '$fecha' WHERE informe_id = " . $id . " AND usuario_id = " . $_SESSION['usuario']['id'];
		$execute = mysqli_query($link, $query);
		if (!$execute) {
			die("Error: " . mysqli_error($link));
		}
		header("Location: squeak.php?id=" . $id . "&#titulo");
	} else {
		$query = "INSERT INTO favoritos(usuario_id,informe_id,fecha_alta) VALUES(" . $_SESSION['usuario']['id'] . "," . $id . ",'$fecha')";
		$execute = mysqli_query($link, $query);
		if (!$execute) {
			die("Error: " . mysqli_error($link));
		}
		header("Location: squeak.php?id=" . $id . "&#titulo");
	}
}

if (isset($_POST['respuesta']) && isset($_POST['comentid']) && isset($_SESSION['usuario'])) {
	if (ctype_digit($_POST['comentid']) == "int") {
		$query = "SELECT * FROM comentarios WHERE fecha_baja IS NULL AND id = " . $_POST['comentid'] . " AND informe_id = " . $id;
		$execute = mysqli_query($link, $query);
		if (!$execute) {
			die("Error: " . mysqli_error($link));
		}
		if (mysqli_num_rows($execute) == 1) {
			$query = 'INSERT INTO comentarios(comentario_padre_id,usuario_id,comentario,informe_id,fecha_alta) VALUES(' . $_POST['comentid'] . ',' . $_SESSION['usuario']['id'] . ',"' . $_POST['respuesta'] . '",' . $id . ',"' . $fecha . '")';
			$execute = mysqli_query($link, $query);
			if (!$execute) {
				die("Error: " . mysqli_error($link));
			} else {
				header("Location: squeak.php?id=" . $id . "&#comentarios");
			}
		}
	} else {
		header("Location: squeak.php?id=" . $id . "&#comentarios");
	}
}
function in_a($needle, $haystack, $strict = false)
{
	foreach ($haystack as $item) {
		if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_a($needle, $item, $strict))) {
			return true;
		}
	}
	return false;
}
$section = "squeak";
require_once "views/layout.php";
