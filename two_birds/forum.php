<?php
session_start();
require_once 'includes/config.php';
if (isset($_POST['titulo']) && isset($_SESSION['usuario'])) {
    $fecha = date('Y-m-d h:i:s', time());
    $query = "INSERT INTO informes(usuario_id,titulo,contenido,fecha_alta,encabezado)
    VALUES('" . $_SESSION['usuario']['id'] . "','" . $_POST['titulo'] . "','" . $_POST['contenido'] . "','" . $fecha . "','" . $_POST['encabezado'] . "')";
    consulta($query, $link,4);
    $query = "SELECT MAX(id) FROM informes";
    $id = consulta($query, $link,1);

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
        if ($cont_tags > 0) {
            consulta($query, $link,4);
        }
        header("Location: forum.php");
    }
}

if (isset($_GET['busqueda'])) {
    $query = "SELECT user_name,foto,id FROM usuarios
        WHERE fecha_baja IS NULL AND user_name LIKE '%" . $_GET['busqueda'] . "%' ORDER BY fecha_alta DESC";
    $usuarios = consulta($query, $link);
    $query = "SELECT COUNT(*) FROM informes
    WHERE fecha_baja IS NULL AND
    (titulo LIKE '%" . $_GET['busqueda'] . "%' OR
    contenido LIKE '%" . $_GET['busqueda'] . "%' OR
    encabezado LIKE '%" . $_GET['busqueda'] . "%')";
    $cant_inf = consulta($query, $link,1);
    if ($cant_inf["COUNT(*)"] > 0) {
        $pags = ceil($cant_inf["COUNT(*)"] / 6);
        if (isset($_GET['pag'])) {
            settype($_GET['pag'], "integer");
            if ($_GET['pag'] > 0 && $_GET['pag'] <= $pags) {
                if ($_GET['pag'] == 1) {
                    $pag = 0;
                    $limit = 6;
                } else {
                    $pag = ($_GET['pag'] - 1) * 6;
                    $limit = 6 * $_GET['pag'];
                }
            } else {
                $pag = 0;
                $limit = 6;
            }
        } else {
            $pag = 0;
            $limit = 6;
        }
    } else {
        $pag = 0;
        $limit = 6;
    }
    $query = "SELECT id,titulo,fecha_alta,encabezado,contenido,fecha_baja FROM informes
    WHERE fecha_baja IS NULL AND (titulo LIKE '%" . $_GET['busqueda'] . "%' OR
    contenido LIKE '%" . $_GET['busqueda'] . "%' OR
    encabezado LIKE '%" . $_GET['busqueda'] . "%')
    ORDER BY fecha_alta DESC LIMIT " . $limit;
} else if (isset($_GET['categoria'])) {
    $query = "SELECT COUNT(*) FROM informes AS i
    INNER JOIN categoria_informe AS ci
    ON i.id = ci.informe_id
    INNER JOIN categorias AS c
    ON ci.categoria_id = c.id
    WHERE i.fecha_baja IS NULL AND
    ci.fecha_baja IS NULL AND
    c.categoria LIKE '%" . $_GET['categoria'] . "%'";

$cant_inf = consulta($query, $link,1);

    if ($cant_inf["COUNT(*)"] > 0) {
        $pags = ceil($cant_inf["COUNT(*)"] / 6);
        if (isset($_GET['pag'])) {
            settype($_GET['pag'], "integer");
            if ($_GET['pag'] > 0 && $_GET['pag'] <= $pags) {
                if ($_GET['pag'] == 1) {
                    $pag = 0;
                    $limit = 6;
                } else {
                    $pag = ($_GET['pag'] - 1) * 6;
                    $limit = 6 * $_GET['pag'];
                }
            }
        } else {
            $pag = 0;
            $limit = 6;
        }
    } else {
        $pag = 0;
        $limit = 6;
    }
    $query = "SELECT i.id,titulo,i.fecha_alta,encabezado FROM informes AS i
    INNER JOIN categoria_informe AS ci
    ON i.id = ci.informe_id
    INNER JOIN categorias AS c
    ON ci.categoria_id = c.id
    WHERE i.fecha_baja IS NULL AND
    ci.fecha_baja IS NULL AND
    c.categoria LIKE '%" . $_GET['categoria'] . "%'";
} else {
    $query = "SELECT * FROM (
        SELECT id,titulo,fecha_alta,encabezado FROM informes WHERE fecha_baja IS NULL ORDER BY fecha_alta DESC LIMIT 0,5
    ) sub
    ";
}

$resultado = consulta($query, $link);

if (count($resultado) > 0) {
    $query = "SELECT c.categoria,ci.informe_id FROM categoria_informe AS ci
		INNER JOIN categorias AS c
		ON ci.categoria_id = c.id
		WHERE fecha_baja IS NULL AND (ci.informe_id = " . $resultado[0]['id'];
    for ($i = 0; $i < count($resultado); $i++) {

        $resultado[$i] = fecha($resultado[$i],$meses);

        if (file_exists("img/portadas/p" . $resultado[$i]['id'] . ".jpg")) {
            $resultado[$i]['portada'] = "p" . $resultado[$i]['id'] . ".jpg";
        } else {
            $resultado[$i]['portada'] = "defecto.png";
        }
        $query = $query . " OR ci.informe_id = " . $resultado[$i]['id'];
    }
    $query .= ")";
    $tags = consulta($query, $link);
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
