<?php
session_start();
require_once 'includes/config.php';
if (isset($_POST['titulo']) && isset($_SESSION['usuario'])) {
    $fecha = date('Y-m-d h:i:s', time());
    $query = "INSERT INTO informes(usuario_id,titulo,contenido,fecha_alta,encabezado)
    VALUES('" . $_SESSION['usuario']['id'] . "','" . $_POST['titulo'] . "','" . $_POST['contenido'] . "','" . $fecha . "','" . $_POST['encabezado'] . "')";
    $execute = mysqli_query($link, $query);
    if (!$execute) {
        die("Error: " . mysqli_error($link));
    }
    $query = "SELECT MAX(id) FROM informes";
    $execute = mysqli_query($link, $query);
    if (!$execute) {
        die("Error: " . mysqli_error($link));
    }
    $id = mysqli_fetch_assoc($execute);

    if (is_array($id)) {
        $id = $id['MAX(id)'];
        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $_POST['contenido'], $image);
        if (count($image) > 0) {
            file_put_contents('img/portadas/p' . $id . '.jpg', file_get_contents($image['src']));
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
        if (strlen($query) < 100) {
            header("Location: forum.php");
        }
        $execute = mysqli_query($link, $query);
        if (!$execute) {
            die("Error: " . mysqli_error($link));
        }
        header("Location: forum.php");
    }
}

if (isset($_GET['busqueda'])) {
    $query = "SELECT * FROM (
        SELECT id,titulo,fecha_alta,encabezado,contenido FROM informes WHERE fecha_baja IS NULL AND titulo LIKE '%" . $_GET['busqueda'] . "%' OR contenido LIKE '%" . $_GET['busqueda'] . "%' OR encabezado LIKE '%" . $_GET['busqueda'] . "%' ORDER BY fecha_alta DESC LIMIT 0,6
    ) sub
    ";
} else if (isset($_GET['categoria'])) {
    $query = "SELECT * FROM (
        SELECT id, titulo, fecha_alta, encabezado FROM informes WHERE fecha_baja IS NULL AND tags LIKE '%" . $_GET['categoria'] . "%' ORDER BY fecha_alta DESC LIMIT 0,6
    ) sub
    ";
} else {
    $query = "SELECT * FROM (
        SELECT id,titulo,fecha_alta,encabezado FROM informes WHERE fecha_baja IS NULL ORDER BY fecha_alta DESC LIMIT 0,5
    ) sub
    ";
}
$execute = mysqli_query($link, $query);
if (!$execute) {
    die("Error: " . mysqli_error($link));
}

$resultado = mysqli_fetch_all($execute, MYSQLI_ASSOC);


if (is_array($resultado)) {
    $query = "SELECT c.categoria,ci.informe_id FROM categoria_informe AS ci
		INNER JOIN categorias AS c
		ON ci.categoria_id = c.id
		WHERE fecha_baja IS NULL AND (ci.informe_id = " . $resultado[0]['id'];
    for ($i = 0; $i < count($resultado); $i++) {
        $fecha = explode("-", $resultado[$i]['fecha_alta']);
        $resultado[$i]['Year'] = $fecha[0];
        $resultado[$i]['mes'] = $fecha[1];
        $fecha = explode(" ", $fecha[2]);
        $resultado[$i]['dia'] = $fecha[0];

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

        $resultado[$i]['mes'] = $meses[$resultado[$i]['mes']];

        if (file_exists("img/portadas/p" . $resultado[$i]['id'] . ".jpg")) {
            $resultado[$i]['portada'] = "p" . $resultado[$i]['id'] . ".jpg";
        } else {
            $resultado[$i]['portada'] = "defecto.png";
        }
        $query = $query . " OR ci.informe_id = " . $resultado[$i]['id'];
    }
    $query .= ")";
    $execute = mysqli_query($link, $query);
    if (!$execute) {
        die("Error: " . mysqli_error($link));
    }
    $tags = mysqli_fetch_all($execute, MYSQLI_ASSOC);
    for ($i = 0; $i < count($resultado); $i++) {
        foreach ($tags as $tag) {
            if ($resultado[$i]['id'] == $tag['informe_id']) {
                $resultado[$i]['tags'][] = $tag['categoria'];
            }
        }
    }
}


$section = "forum";
$title = "Foro";
require_once "views/layout.php";
