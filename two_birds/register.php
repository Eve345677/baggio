<?php
require_once 'includes/config.php';
$exito = false;
if (isset($_POST["insert"])) {

    $user = $_POST["username"];
    $pass = $_POST["password"];
    $mail = $_POST["email"];
    $insert = "SELECT email FROM usuarios WHERE email = '" . $mail . "'";
    $execute = mysqli_query($link, $insert);
    if (!$execute) {
        die("Error: " . mysqli_error($link));
    }
    $insert = "SELECT user_name FROM usuarios WHERE user_name = '" . $user . "'";
    $execute1 = mysqli_query($link, $insert);
    if (!$execute1) {
        die("Error: " . mysqli_error($link));
    }
    if (mysqli_num_rows($execute) == 0) {
        if (mysqli_num_rows($execute1) == 0) {
            $pass = md5($pass);
            $insert = "INSERT INTO usuarios (id, user_name, password, email, foto,fecha_alta) VALUES (NULL,'$user','$pass','$mail','pajarito.jpg','" . date("Y-m-d h:i:s", time()) . "')";
            $execute = mysqli_query($link, $insert);
            if (!$execute) {
                die("Error: " . mysqli_error($link));
            }
            $insert = "SELECT id FROM usuarios WHERE user_name = '$user' AND email = '$mail' AND password = '$pass'";
            $execute = mysqli_query($link, $insert);
            if (!$execute) {
                die("Error: " . mysqli_error($link));
            }
            $id = mysqli_fetch_assoc($execute);
            if (mysqli_num_rows($execute) == 1) {
                $insert = "INSERT INTO rango_usuario (rango_id,usuario_id,fecha_alta) VALUES (1," . $id['id'] . ",'" . date("Y-m-d h:i:s", time()) . "')";
                $execute = mysqli_query($link, $insert);
                if (!$execute) {
                    die("Error: " . mysqli_error($link));
                }
                $exito = true;
            }
        }
    }
}
$section = "register";
require_once "views/layout.php";
