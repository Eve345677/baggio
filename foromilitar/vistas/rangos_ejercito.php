<link rel="stylesheet" href="css/centrar.css">
 <div class="col-6"  style="color:black;"> 
 <?php for ($i=0;$i < count($dou);$i++) { ?> 
  <?php if($i == 0 || $i % 4 == 0){ if($i != 0){ ?> </div> 
    <?php } ?>
   <div class="rangos1234 " style="display:flex; " > <?php } ?> 
   <div class="rangos12367 " style="  border:solid 1px  ; width:300px; margin: 10px; padding: 20px; height:350px;  background-color:beige;"> 
   <?php if($dou[$i]["Oficial_Suboficial"]=="Suboficial"){ $o="suboficial";?>
     <h1>Suboficial</h1> <?php } ?> <?php if($dou[$i]["Oficial_Suboficial"]=="Oficial"){ $o="oficial";?> 
      <h1>Oficial</h1> <?php } ?>
       <p class="rangos123">Rango : <?php echo $dou[$i]["rango"]; ?> 
    </p> 
    <?php require_once "includes/config.php"; $py=$dou[$i]['rango']; echo  '<img style="margin-top: 40px; width:150px; height:150px;" src="img/rangos/'.$dou[$i]['division'].'/'.$o .'/'.$py .'.png" > '; ?> </div>
     <br> <?php } ?> </div>