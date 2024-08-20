<?php
    $cadena = $_POST["lista"];
    $lista = array();

    print("<p>La cadena es: ".$cadena." </p>");

    $lista = explode(",",$cadena);

    //Hallando el número mayor
    $mayor = $lista[0];
    for($j=0; $j<=count($lista)-1; $j++){
        if($mayor<=$lista[$j+1]){
            $mayor = $lista[$j+1];
        }
    }

    print("El número mayor es: ".$mayor);

    //Hallando el número menor
    $menor = $lista[0];
    for($j=0; $j<=count($lista)-1; $j++){
        if($menor>=$lista[$j+1]){
            $menor = $lista[$j+1];
        }
    }
    
    print("El número menor es: ".$menor);

?>