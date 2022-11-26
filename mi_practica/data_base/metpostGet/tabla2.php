<?php
$cant_filas = $_GET['c_filas'];
$cant_cols = $_GET['c_cols'];
?>

<form method="POST" action="mostra.php">
    <input type='text' name='correo'>
    <select name='tipo_doc'>
        <option value='1'>Dni</option>
        <option value='2'>CI</option>
        <option value='PASSaporte'>Pasaporte</option>
    </select>
    <input type='submit'>
</form>

<hr>
<form>
    ingrese radio: <input name='radio'>
    <br>
    ingrese filas: <input name='c_filas'>
    <br>
    ingrese cols: <input name='c_cols'>
    <br>
    <input type='submit'>
</form>

Perimitro = <?php echo 2 * M_PI * $_GET['radio'] ?>
<br>
Sup = <?php echo M_PI * pow($_GET['radio'], 2) ?>

<table border="1">
    <?php for ($filas = 1; $filas <= $cant_filas; $filas++) { ?>
        <tr>
            <?php for ($columnas = 1; $columnas <= $cant_cols; $columnas++) { ?>
                <td><?php echo $filas . "-" . $columnas; ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>