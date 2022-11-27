<div id="info" class="col-6" style="color:black;">
	<h1><?php echo $dou[0]["nombre"] ?></h1> <!-- aqui pon el nombre de la sección -->
	<p id="info_contenido"><?php echo $dou[0]["informacion"]; ?></p>
	<!-- colocar aqui la info de la arma :b -->
</div>
<div id="perfil" class="col-3" style="color:black;">
<?php
    require_once "includes/config.php"; 
    $jy=$_GET['id'];
    
echo  '<img src="img/conflicto'.$jy.'.jpg" > ';
     ?>
	<!-- Aqui va la imagen principal de la pagina, no olvidar de poner el alt que es la mini descripción de la imagen -->
	<!-- Aqui en adelante habran etiquetas para la sección, en caso de ser necesario editar cuidadosamente el html, sino sabe pregunte al gabi xd -->
	<p>Nombre:<?php echo $dou[0]["nombre"]; ?></p> <!-- aqui va el nombre de la arma -->
	<p>Fecha: <?php echo $dou[0]["año"]; ?></p> <!-- aqui va el peso del arma -->
	<!-- aqui va el alcance -->
</div>