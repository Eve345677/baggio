<?php
$sumaT;
$totalN=10;
$array =[12, 308, 400, 374, 345, 140, 320, 437, 126, 144];
foreach($array as $valor){
    $sumaT=$sumaT+$valor;
}
echo "el promedio de los numeros del array es de ", $sumaT/$totalN;





?>