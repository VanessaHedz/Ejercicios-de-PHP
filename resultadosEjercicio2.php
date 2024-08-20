<!-- Código PHP: recibe los datos de Nombre y de Edad y los muestra en un mensaje -->
<?php
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];     
        
        echo "<p>¡Hola ".$nombre."!</p>";
        echo "<p>Tienes ".$edad."años</p>";
    ?>