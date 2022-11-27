<?php 
$mens="hola mundo";
echo $mens;
echo "<br>";
$num1=4;
$num2=2;
$num3=1;
$pos1=0;
$pos2=0;
$pos3=0;
if ($num1>$num2 && $num1>$num3 && $num2>$num3){
    $pos1=$num1;
    $pos2=$num2;
    $pos3=$num3;
}else if ($num2>$num1 && $num2>$num3 && $num1>$num3){
    $pos1=$num2;
    $pos2=$num1;
    $pos3=$num3;
}else if ($num3>$num1 && $num3>$num2 && $num2>$num1){
    $pos1=$num3;
    $pos2=$num2;
    $pos3=$num1;
}else {
    $pos1=$num3;
    $pos2=$num1;
    $pos3=$num2;
}
echo "el orden de mayor a menor de los numeros es",$pos1,"    ",$pos2,"    ",$pos3;
?>