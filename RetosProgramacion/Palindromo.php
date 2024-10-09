<?php
// Solicitar entrada al usuario
echo "Por favor, ingresa un anagrama: ";
$anagrama = trim(fgets(STDIN));

$lista = str_split($anagrama);
$lista2 = [];
$flg = true;

for ($i = 0; $i < count($lista); $i++) {
    if ($lista[$i] != " ") {
        array_push($lista2, $lista[$i]);
    }
}


for ($i = 0; $i < count($lista2); $i++) {
    if ($lista2[$i] != $lista2[count($lista2) - $i - 1]) {
        $flg = false;
    }
}

if ($flg) {
    print("Es palíndromo");
} else {
    print("No es palíndromo");
}
