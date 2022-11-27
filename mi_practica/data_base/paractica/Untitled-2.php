<?php
$min2;
$min;
$array = [177, 201, 168, 464, 279, 307, 158, 447, 269, 81];
foreach($array as $valor){
    
    if ($valor<$array){
    $min=$valor;
    }
    else{
        $min2=$valor;
        
    }
    
}
echo "el mayor de los numeros es " ,$min2,"<br>";
echo "el menor de los numeros es ", $min ,"<br>";



?>