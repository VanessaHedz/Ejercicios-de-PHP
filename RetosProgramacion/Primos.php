<?php
$primos = [];
$nuevoPrimo=0;

for ($i = 0; $i < 100; $i++) {
    $nuevoPrimo++;
    $flgPrimo=true;

    foreach($primos as $primo){
        if($nuevoPrimo%$primo==0 && $primo!=1){
            $flgPrimo=false;
            break;
        }
    }

    if($flgPrimo){
        array_push($primos,$nuevoPrimo);
    }
    
}

print_r($primos);