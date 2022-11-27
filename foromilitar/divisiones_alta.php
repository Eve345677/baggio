<?php
require_once "includes/config.php";

if (isset($_POST['nombre'])) {
    $sql = "INSERT INTO venta_de_armas VALUES(null,'" . $_POST['tipo'] . "','" . $_POST['nombre'] . "','" . $_POST['nacionalidad'] . "'," . $_POST['precio'] . ", '".$_FILES['principal_img']."', '". $_POST['info'] ."')";
    $res = mysqli_query($conn, $sql);

    if (!$res) {
        die('Error de Consulta: ' . mysqli_errno($conn));
    }

    $armas_id = mysqli_insert_id($conn);
    if ($_FILES['principal_img']['type'] == 'image/jpeg' && $_FILES['principal_img']['error'] == 0) {
        if (!is_dir('img/' . $armas_id)) {
            mkdir('img/' . $armas_id);
        }
        move_uploaded_file($_FILES['principal_img']['tmp_name'], 'img/' . $armas_id . '/principal.jpg');
    }
    header("Location: divisiones_lista.php");
 }


$section = "vistas/divisiones_alta.php";
require_once "vistas/layout.php";
