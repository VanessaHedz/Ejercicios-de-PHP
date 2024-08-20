<?php
    $texto=$_POST["texto"];
    $texto=strtolower($texto);
    $lista = str_split($texto);
    $esPalindromo = true;

    //var_dump($lista);
    for($i=0; $i<count($lista);$i++){
        if($lista[$i]!=$lista[count($lista)-$i-1]){
            $esPalindromo = false;
        }
    }

    if($esPalindromo){
        echo "Es palíndromo.";
    }
    else{
        echo "No es palíndromo.";
    }

?>