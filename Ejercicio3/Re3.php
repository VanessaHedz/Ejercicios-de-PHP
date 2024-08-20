<?php
    $numero=$_POST["numero"];
    
    echo "<h1>La tabla del ".$numero."</h1>";

    for ($i = 1; $i<=10; $i++)
    {
        echo "<p>".$numero." x ".$i." = ".$i*$numero."</p>";
    }
?>