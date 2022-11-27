<?php
require_once 'includes/config.php';
$exito = false;
if (isset($_POST["insert"])) {

    $user = $_POST["username"];
    $pass = $_POST["password"];
    $mail = $_POST["email"];
    $insert = "SELECT email FROM usuarios WHERE email = '" . $mail . "'";
    $insert1 = "SELECT user_name FROM usuarios WHERE user_name = '" . $user . "'";
    if (consulta($insert, $link, 3) == 0) {
        if (consulta($insert1, $link, 3) == 0) {
            $pass = md5($pass);
            $insert = "INSERT INTO usuarios (id, user_name, password, email, foto,fecha_alta) VALUES (NULL,'$user','$pass','$mail','pajarito.jpg','" . date("Y-m-d h:i:s", time()) . "')";
            $rec = consulta($insert, $link, 4);
            $insert = "SELECT id FROM usuarios WHERE user_name = '$user' AND email = '$mail' AND password = '$pass'";
            $id = consulta($insert, $link, 1);
            if (is_array($id)) {
                $insert = "INSERT INTO rango_usuario (rango_id,usuario_id,fecha_alta) VALUES (1," . $id['id'] . ",'" . date("Y-m-d h:i:s", time()) . "')";
                consulta($insert, $link, 4);
                $exito = true;
            } else{
                die("No se admitio a usuario");
            }
        } else {
            header("Location: register.php?error=true");
        }
    } else {
        header("Location: register.php?error=true");
    }
}
$section = "register";
require_once "views/layout.php";
