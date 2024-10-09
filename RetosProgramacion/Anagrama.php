<?php
echo "Ingresa las 2 palabras separadas por ',' y sin espacios: ";
$palabras = trim(fgets(STDIN));
$lista = explode(",", $palabras);

$palabra1 = $lista[0];
$palabra2 = $lista[1];

if ($palabra1 == $palabra2) {
    print("**************\n");
    print("Son la misma palabra\n");
    print("**************\n");
} else {
    $lp1 = str_split($palabra1);
    $lp2 = str_split($palabra2);

    for ($i = 0; $i < count($lp1); $i++) {
        for ($j = 0; $j < count($lp2); $j++) {
            if ($lp1[$i] == $lp2[$j]) {
                array_splice($lp2, $j, 1);
            }
        }
    }
    if (count($lp2) == 0) {
        print("**************\n");
        print("Es un anagrama\n");
        print("**************\n");
    } else {
        print("**************\n");
        print("No es un anagrama\n");
        print("**************\n");
    }
}


