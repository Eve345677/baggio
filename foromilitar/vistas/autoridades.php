<link rel="stylesheet" href="css/centrar.css">
<div class="col-6"  style="color:black;">
    <?php for ($i=0;$i < count($dou);$i++) { ?>
      <?php if($i == 0 || $i % 4 == 0){ 
        if($i != 0){ ?>
        </div>
        <?php } ?>
      <div class="rangos1234 " style="display:flex; " >
      <?php } ?>
      <div class="rangos12367 " style="  border:solid 1px  ; width:300px; margin: 10px;
  padding: 20px; height:350px;  background-color:beige;">
        <p class="rangos123">Cargo : <?php echo $dou[$i]["cargo"]; ?> </p>
        <p class="rangos123">Fecha: <?php echo $dou[$i]["fecha"]; ?></p>
        <p class="rangos123">Nombre: <?php echo $dou[$i]["nombre"];  ?> </p>
        <p class="rangos123"> Apellido: <?php echo $dou[$i]["apellidopat"];  ?> <?php echo $dou[$i]["apellidomat"];  ?></p>
        
        <?php
    require_once "includes/config.php"; 
    $py=$dou[$i]['IDtrabajadores'];
  
echo  '<img style="width:150px; height:150px;" src="img/autoridades/'.$py .'.jpg" > ';
     ?>
      </div>
      <br>
      <?php 
     } ?>

</div>