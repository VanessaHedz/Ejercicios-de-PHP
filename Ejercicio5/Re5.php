<?php
    /********* REGLAS DE LAS CONTRASEÑAS SEGURAS ********
     *  - Longitud de 8 caracteres                      *
     *  - Alternar entre mayúsculas y minúsculas        *
     *  - Usar caracteres especiales                    */

    $nombre = $_POST["nombre"];
    $cuenta = $_POST["cuenta"];

    $listaNombre = str_split($nombre);
    $listaCuenta = str_split($cuenta);

    $especiales = ["!","@","$","%","&","/","(",")","=","+","?","[","]","~","_","^"];
    $password = "";

    var_dump($listaNombre);
    var_dump($listaCuenta);

    for($i=1; $i<=8; $i++){
        if($i == 1){
            $char = (string)rand(0,9);
            echo "<p>".$i." = ".$char."</p>";
            $password = $password.$char;
        }

        elseif($i % 2 == 0 and $i!=6 and $i!=8){
            $temp = rand(0,count($listaNombre)-1);
            $char = strtoupper($listaNombre[$temp]);
            echo "<p>".$i." = ".$char."</p>";
            $password = $password.$char;
        }
        elseif($i % 3 == 0){
            $temp = rand(0,count($listaCuenta)-1);
            $char = strtolower($listaCuenta[$temp]);
            echo "<p>".$i." = ".$char."</p>";
            $password = $password.$char;
        }
        elseif($i % 5 == 0){
            $char = (string)rand(0,9);
            echo "<p>".$i." = ".$char."</p>";
            $password = $password.$char;
        }
        else{
            $temp = rand(0,count($especiales)-1);
            $char = $especiales[$temp];
            echo "<p>".$i." = ".$char."</p>";
            $password = $password.$char;
        }

    }

    echo "<p>Tu contraseña nueva es: ".$password."</p>";
    
?>