<?php 
require_once "config.php";
if(isset($_POST['nombre'])){
    $sql="INSERT INTO categorias(cat_nombre) VALUES ('".$_POST['nombre']."')";
    $query=mysqli_query($con,$sql);
    if(!$query){
        die("Error de consulta: ". mysqli_errno($con));
    }
        header("Location: lista.php");
    
}
?>
<form method="POST">
    <label>Nombre de categoria</label>
    <input type="text" name="nombre" required>
    <input type="submit">
</form>