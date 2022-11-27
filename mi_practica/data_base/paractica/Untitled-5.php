<?php
$cant_filas=9;
$cant_cols=9;
?>
<table border="1">
    <?php for ($filas = 1; $filas <= $cant_filas; $filas++) { ?>
        <tr>
            <?php for ($columnas = 1; $columnas <= $cant_cols; $columnas++) {?>
                <td bgcolor="white"><?php echo $filas . "-" . $columnas; ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>
<?php echo "      <br> "?>
<?php
$cant_filas=9;
$cant_cols=9;
?>
<table border="1">
    <?php for ($filas = 1; $filas <= $cant_filas; $filas++) { ?>
        <tr>
            <?php for ($columnas = 1; $columnas <= $cant_cols; $columnas++) {
          
            ?>
                <td bgcolor="<?php if ($columnas==$filas){echo "red";} $suma=$columnas+$filas;if($suma==10){echo "red";}?>"><?php echo $filas . "-" . $columnas; ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>
<?php echo "      <br> "?>
<?php
$cant_filas=9;
$cant_cols=9;
?>
<table border="1">
    <?php for ($filas = 1; $filas <= $cant_filas; $filas++) { ?>
        <tr>
            <?php for ($columnas = 1; $columnas <= $cant_cols; $columnas++) {
          
            ?>
                <td bgcolor="<?php if ($filas==5){echo "red";}if ($columnas==5){echo "red";}?>"><?php echo $filas . "-" . $columnas; ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>
<?php echo "      <br> "?>
<?php
$cant_filas=9;
$cant_cols=9;
?>
<table border="1">
    <?php for ($filas = 1; $filas <= $cant_filas; $filas++) { ?>
        <tr>
            <?php for ($columnas = 1; $columnas <= $cant_cols; $columnas++) {
          
            ?>
                <td bgcolor="<?php $suma=$columnas+$filas; if ($columnas==$filas && $suma<11){echo "red";} if($suma==10 && $columnas>=6){echo "red";}?>"><?php echo $filas . "-" . $columnas; ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>