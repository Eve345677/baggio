<?php
require_once "config.php";
if(isset($_GET['id'])){
    $sql = "DELETE FROM categorias WHERE cat_id = ".$_GET['id'];
    $query = mysqli_query($con,$sql);
    if(!$query){
        die("Error de consulta: ".mysqli_errno($con));
    }
    else{
        header("Location: lista.php");
    }
}