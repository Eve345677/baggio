<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'two_birds');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

function consulta($query, $link, $option = false)
{
    $execute = mysqli_query($link, $query);
    if (!$execute) {
        die("Error: " . mysqli_error($link));
    }
    if ($option == 1) {
        return mysqli_fetch_assoc($execute);
    } else if ($option == 2) {
        return mysqli_fetch_all($execute, MYSQLI_NUM);
    } else if ($option == 3) {
        return mysqli_num_rows($execute);
    } else if ($option == 4) {
        return;
    } else {
        return mysqli_fetch_all($execute, MYSQLI_ASSOC);
    }
}

function fecha($arreglo, $meses, $option = false)
{
    if (!$option) {
        $fecha = explode("-", $arreglo['fecha_alta']);
        $arreglo['Year'] = $fecha[0];
        $arreglo['mes'] = $fecha[1];
        $fecha = explode(" ", $fecha[2]);
        $arreglo['dia'] = $fecha[0];
        $arreglo['mes'] = $meses[$arreglo['mes']];
        return $arreglo;
    } else if ($option == 1) {
        $fecha = explode("-", $arreglo['fecha_modificacion']);
        $arreglo['Year_m'] = $fecha[0];
        $arreglo['mes_m'] = $fecha[1];
        $fecha = explode(" ", $fecha[2]);
        $arreglo['dia_m'] = $fecha[0];
        $arreglo['mes_m'] = $meses[$arreglo['mes_m']];
        return $arreglo;
    }
}

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
