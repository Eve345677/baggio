<?php
$num=3;
$num2=9;
$num3=2;
$limit=5;
$tabla=10;
for($i=50;$i>=$num;$i--){
    echo $i," ;";
}
echo "<br>";
for($i=1;$i<=$tabla;$i++){
    echo "9x",$i,"=",$num2*$i,"<br>";
}
echo "<br>";
for ($i=1;$i<=$limit;$i++){
    echo "2^",$i,"=",$num3**$i,"<br>";
}
?>