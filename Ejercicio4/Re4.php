<?php
    $cadena = $_POST["lista"];
    $lista = array();

    print("<p>La cadena es: ".$cadena." </p>");

    $lista = explode(",",$cadena);

    //Hallando el número mayor
    $mayor = $lista[0];
    for($j=0; $j<count($lista); $j++){
        if($mayor <= $lista[$j]){
            $mayor = $lista[$j];
        }
    }

    //Hallando el número menor
    $menor = $lista[0];
    for($j=0; $j < count($lista); $j++){
        if($menor >= $lista[$j]){
            $menor = $lista[$j];
        }
    }

    echo "<p>El número mayor es: ".$mayor."</p>";
    echo "<p>El número menor es: ".$menor."</p>";
?>