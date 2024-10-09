<?php
$numeros=[0,1];
for($i=0;$i<49;$i++){
    $num = $numeros[count($numeros)-1] + $numeros[count($numeros)-2];
    array_push($numeros,$num);
}

for($i=0; $i<count($numeros)-1; $i++){
    print($numeros[$i].",");
}