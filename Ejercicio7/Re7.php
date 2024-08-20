<?php
    $numero = $_POST["numero"];
    $resultado=1;
    
    for($i=0; $i<$numero; $i++){
        $resultado=$resultado*($numero-$i);
    }

    echo "<p>El factorial de ".$numero." es ".$resultado."</p>";

?>