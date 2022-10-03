 
<?php
require_once "includes/config.php";
session_start();
if (isset($_POST['nombre']) && ($_FILES['archivo']['type'] == 'image/jpeg' || $_FILES['archivo']['type'] == 'image/png') && $_FILES['archivo']['error'] == 0) {
    $nombre = $_POST['nombre'];
    mkdir("img/" . $nombre . "");
    $ruta = "img/" . $_POST['nombre'] . "/" . $_FILES['archivo']['name'];
    $nombre_imagen = $_FILES['archivo']['name'];
    $ruta2 = $nombre . "/" . $nombre_imagen;
    if (move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta)) {
        header("Location: my_profile.php");
    } else {
        echo "No se pudo subir la imagen";
    }
    $query = "UPDATE usuarios SET foto = '" . $ruta2 . "' WHERE user_name = '" . $nombre . "';";
    $execute = mysqli_query($link, $query);
    if (!$execute) {
        die("Error: " . mysqli_error($link));
    }
}
if (isset($_SESSION['usuario'])) {
    $query = "SELECT informes.id,informes.usuario_id,titulo,informes.fecha_alta,encabezado,fecha_modificacion,informes.fecha_baja FROM informes INNER JOIN favoritos ON informes.id = favoritos.informe_id WHERE informes.fecha_baja IS NULL AND favoritos.fecha_baja IS NULL AND favoritos.usuario_id = " . $_SESSION['usuario']['id'];
    $execute = mysqli_query($link, $query);
    if (!$execute) {
        die("Error: " . mysqli_error($link));
    }

    $resultado = mysqli_fetch_all($execute, MYSQLI_ASSOC);

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

    if (is_array($resultado)) {
        for ($i = 0; $i < count($resultado); $i++) {
            $fecha = explode("-", $resultado[$i]['fecha_alta']);
            $resultado[$i]['Year'] = $fecha[0];
            $resultado[$i]['mes'] = $fecha[1];
            $resultado[$i]['dia'] = $fecha[2];
            $resultado[$i]['mes'] = $meses[$resultado[$i]['mes']];
            if (file_exists("img/portadas/p" . $resultado[$i]['id'] . ".jpg")) {
                $resultado[$i]['portada'] = "p" . $resultado[$i]['id'] . ".jpg";
            } else {
                $resultado[$i]['portada'] = "defecto.png";
            }
        }
    }
    $sql = "SELECT * FROM informes WHERE fecha_baja IS NULL AND usuario_id = " . $_SESSION['usuario']['id'];
    $execute = mysqli_query($link, $sql);
    if (!$execute) {
        die("Error: " . mysqli_error($link));
    }
    $resultado1 = mysqli_fetch_all($execute, MYSQLI_ASSOC);
    if (is_array($resultado1)) {
        for ($i = 0; $i < count($resultado1); $i++) {
            $fecha = explode("-", $resultado1[$i]['fecha_alta']);
            $resultado1[$i]['Year'] = $fecha[0];
            $resultado1[$i]['mes'] = $fecha[1];
            $resultado1[$i]['dia'] = $fecha[2];
            $resultado1[$i]['mes'] = $meses[$resultado1[$i]['mes']];
            if (file_exists("img/portadas/p" . $resultado1[$i]['id'] . ".jpg")) {
                $resultado1[$i]['portada'] = "p" . $resultado1[$i]['id'] . ".jpg";
            } else {
                $resultado1[$i]['portada'] = "defecto.png";
            }
        }
    }
    $admin = false;
    $mod = false;
    foreach ($_SESSION['usuario']['rangos'] as $ran) {
        if ($ran['rango'] == "admin") {
            $admin = true;
        }
        if ($ran['rango'] == "mod") {
            $mod = true;
        }
    }
    if ($admin == true || $mod == true) {
        $query = "SELECT id ,user_name FROM usuarios WHERE fecha_baja IS NULL";
        $execute = mysqli_query($link, $query);
        if (!$execute) {
            die("Error: " . mysqli_error($link));
        }

        $users = mysqli_fetch_all($execute, MYSQLI_ASSOC);

        if (mysqli_num_rows($execute) > 0) {
            $query = "SELECT ru.usuario_id,r.rango FROM rango_usuario AS ru
            INNER JOIN rangos AS r
                ON ru.rango_id = r.id
            WHERE ru.fecha_baja IS NULL";
            $execute = mysqli_query($link, $query);
            if (!$execute) {
                die("Error: " . mysqli_error($link));
            }
            $rangos_users = mysqli_fetch_all($execute, MYSQLI_ASSOC);
            for ($i = 0; $i < count($users); $i++) {
                foreach ($rangos_users as $ru) {
                    if ($users[$i]['id'] == $ru['usuario_id']) {
                        $users[$i]['rangos'][] = $ru['rango'];
                    }
                }
            }
        }
    }

    $query = "SELECT titulo,moderacion,tipo,m.id FROM informes AS i
    INNER JOIN moderaciones AS m
    ON  i.id = m.informe_id
    WHERE i.usuario_id = " . $_SESSION['usuario']['id'] . " AND
    m.fecha_baja IS NULL";
    $execute = mysqli_query($link, $query);
    if (!$execute) {
        die("Error: " . mysqli_error($link));
    }
    $moderacion = mysqli_fetch_all($execute, MYSQLI_ASSOC);

    if (isset($_POST['msj_d']) && isset($_POST['id'])) {
        if (ctype_digit($_POST['id']) && $_POST['msj_d'] != $_SESSION['usuario']['id']) {
            $query = "SELECT i.usuario_id FROM moderaciones AS m
            INNER JOIN informes AS i
            ON m.informe_id = i.id
            WHERE m.id = " . $_POST['id'];
            $execute = mysqli_query($link, $query);
            if (!$execute) {
                die("Error: " . mysqli_error($link));
            }
            $msj_el = mysqli_fetch_assoc($execute);

            if ($msj_el['usuario_id'] == $_SESSION['usuario']['id']) {
                $query = "UPDATE moderaciones
                SET fecha_baja = '" . date("Y-m-d h:i:s", time()) . "'
                WHERE id = " . $_POST['id'];
                $execute = mysqli_query($link, $query);
                if (!$execute) {
                    die("Error: " . mysqli_error($link));
                } else {
                    header("Location: my_profile.php?seccion=buzon#atajo");
                }
            } else {
                header("Location: my_profile.php?seccion=buzon#atajo");
            }
        } else {
            header("Location: my_profile.php?seccion=buzon#atajo");
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
    if (isset($_POST['id_d'])) {
        if (ctype_digit($_POST['id_d']) && $_POST['id_d'] != $_SESSION['usuario']['id']) {
            $query = "SELECT r.rango FROM rango_usuario AS ru
            INNER JOIN rangos AS r
            ON ru.rango_id = r.id
            INNER JOIN usuarios AS u
            ON ru.usuario_id = u.id
            WHERE ru.usuario_id = " . $_POST['id_d'] . " AND
            u.fecha_baja IS NULL";
            $execute = mysqli_query($link, $query);
            if (!$execute) {
                die("Error: " . mysqli_error($link));
            }
            $baneado = mysqli_fetch_all($execute, MYSQLI_ASSOC);

            if (mysqli_num_rows($execute) == 0) {
                header("Location: my_profile.php?seccion=usuario#atajo");
            }

            $mod = "user";
            foreach ($baneado as $ran) {
                if ($ran == "admin") {
                    $mod = "admin";
                    break;
                } else if ($ran == "mod") {
                    $mod = "mod";
                }
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

            $mode = $rangos[$mode];
            $ban = $rangos[$mod];
            if ($mode < $ban) {
                header("Location: my_profile.php?seccion=usuario#atajo");
            } else {
                $query = "UPDATE usuarios
                SET fecha_baja = '" . date("Y-m-d h:i:s", time()) . "'
                WHERE id = " . $_POST['id_d'];
                $execute = mysqli_query($link, $query);
                if (!$execute) {
                    die("Error: " . mysqli_error($link));
                } else {
                    header("Location: my_profile.php?seccion=usuario#atajo");
                }
            }
        } else {
            header("Location: my_profile.php?seccion=usuario#atajo");
        }
    }
    if (isset($_POST['id_asc'])) {
        if (ctype_digit($_POST['id_asc']) && $_POST['id_asc'] != $_SESSION['usuario']['id']) {
            $query = "SELECT r.rango FROM rango_usuario AS ru
            INNER JOIN rangos AS r
            ON ru.rango_id = r.id
            INNER JOIN usuarios AS u
            ON ru.usuario_id = u.id
            WHERE ru.usuario_id = " . $_POST['id_asc'] . " AND
            u.fecha_baja IS NULL AND
            ru.fecha_baja IS NULL";
            $execute = mysqli_query($link, $query);
            if (!$execute) {
                die("Error: " . mysqli_error($link));
            }
            $ascendido = mysqli_fetch_all($execute, MYSQLI_ASSOC);

            if (in_a("mod", $ascendido) && !in_a("admin", $ascendido) && in_a("admin", $_SESSION['usuario']['rangos'])) {
                $query = "INSERT INTO rango_usuario(rango_id,usuario_id,fecha_alta) VALUES(3," . $_POST['id_asc'] . ",'" . date("Y-m-d h:i:s", time()) . "')";
                $execute = mysqli_query($link, $query);
                if (!$execute) {
                    die("Error: " . mysqli_error($link));
                } else {
                    header("Location: my_profile.php?seccion=usuario#atajo");
                }
            } else if (in_a("user", $ascendido) && !in_a("mod", $ascendido) && (in_a("admin", $_SESSION['usuario']['rangos']) || in_a("mod", $_SESSION['usuario']['rangos']))) {
                $query = "INSERT INTO rango_usuario(rango_id,usuario_id,fecha_alta) VALUES(2," . $_POST['id_asc'] . ",'" . date("Y-m-d h:i:s", time()) . "')";
                $execute = mysqli_query($link, $query);
                if (!$execute) {
                    die("Error: " . mysqli_error($link));
                } else {
                    header("Location: my_profile.php?seccion=usuario#atajo");
                }
            } else {
                header("Location: my_profile.php?seccion=usuario#atajo");
            }
        }
    }
    if (isset($_POST['id_deg'])) {
        if (ctype_digit($_POST['id_deg']) && $_POST['id_deg'] != $_SESSION['usuario']['id']) {
            $query = "SELECT r.rango FROM rango_usuario AS ru
            INNER JOIN rangos AS r
            ON ru.rango_id = r.id
            INNER JOIN usuarios AS u
            ON ru.usuario_id = u.id
            WHERE ru.usuario_id = " . $_POST['id_deg'] . " AND
            u.fecha_baja IS NULL AND
            ru.fecha_baja IS NULL";
            $execute = mysqli_query($link, $query);
            if (!$execute) {
                die("Error: " . mysqli_error($link));
            }
            $degradado = mysqli_fetch_all($execute, MYSQLI_ASSOC);

            if (in_a("admin", $degradado) && in_a("admin", $_SESSION['usuario']['rangos'])) {
                $query = "UPDATE rango_usuario SET fecha_baja = '" . date("Y-m-d h:i:s", time()) . "' WHERE usuario_id = " . $_POST['id_deg'] . " AND rango_id = 3  AND fecha_baja IS NULL";
                $execute = mysqli_query($link, $query);
                if (!$execute) {
                    die("Error: " . mysqli_error($link));
                } else {
                    header("Location: my_profile.php?seccion=usuario#atajo");
                }
            } else if (in_a("mod", $degradado) && (in_a("admin", $_SESSION['usuario']['rangos']) || in_a("mod", $_SESSION['usuario']['rangos']))) {
                $query = "UPDATE rango_usuario SET fecha_baja = '" . date("Y-m-d h:i:s", time()) . "' WHERE usuario_id = " . $_POST['id_deg'] . " AND rango_id = 2  AND fecha_baja IS NULL";
                $execute = mysqli_query($link, $query);
                if (!$execute) {
                    die("Error: " . mysqli_error($link));
                } else {
                    header("Location: my_profile.php?seccion=usuario#atajo");
                }
            } else {
                header("Location: my_profile.php?seccion=usuario#atajo");
            }
        }
    }
    if (isset($_POST['username'])) {
        $query = "SELECT user_name FROM usuarios WHERE user_name = '" . $_POST['username'] . "'";
        $execute = mysqli_query($link, $query);
        if (!$execute) {
            die("Error: " . mysqli_error($link));
        }
        if (mysqli_num_rows($execute) == 0) {
            $query = "UPDATE usuarios SET user_name = '" . $_POST['username'] . "' WHERE id = " . $_SESSION['usuario']['id'];
            $execute = mysqli_query($link, $query);
            if (!$execute) {
                die("Error: " . mysqli_error($link));
            }
            $_SESSION['usuario']['user_name'] = $_POST['username'];
            header("Location: my_profile.php");
        } else {
            header("Location: my_profile.php");
        }
    }
    if (isset($_POST['email'])) {
        $query = "SELECT email FROM usuarios WHERE email = '" . $_POST['email'] . "'";
        $execute = mysqli_query($link, $query);
        if (!$execute) {
            die("Error: " . mysqli_error($link));
        }
        if (mysqli_num_rows($execute) == 0) {
            $query = "UPDATE usuarios SET email = '" . $_POST['email'] . "' WHERE id = " . $_SESSION['usuario']['id'];
            $execute = mysqli_query($link, $query);
            if (!$execute) {
                die("Error: " . mysqli_error($link));
            }
            $_SESSION['usuario']['email'] = $_POST['email'];
            header("Location: my_profile.php");
        } else {
            header("Location: my_profile.php");
        }
    }
    if (isset($_POST['actual']) && isset($_POST['contra']) && isset($_POST['comp'])) {
        $query = "SELECT password FROM usuarios WHERE id = " . $_SESSION['usuario']['id'] . " AND password = MD5('" . $_POST['actual'] . "')";
        $execute = mysqli_query($link, $query);
        if (!$execute) {
            die("Error: " . mysqli_error($link));
        }
        if (mysqli_num_rows($execute) == 1 && $_POST['contra'] == $_POST['comp']) {
            $query = "UPDATE usuarios SET password = MD5('" . $_POST['contra'] . "') WHERE id = " . $_SESSION['usuario']['id'];
            $execute = mysqli_query($link, $query);
            if (!$execute) {
                die("Error: " . mysqli_error($link));
            }
            $_SESSION['usuario']['password'] = $_POST['contra'];
            header("Location: my_profile.php");
        } else {
            header("Location: my_profile.php");
        }
    }
}
$title = "Perfil";
$section = "my_profile";
require_once "views/layout.php";
