<?php
function Poligono($lados, $lado1, $lado2){
    $area=0;
    switch ($lados){
        case 3:
            $area=($lado1*$lado2)/2;
            break;
        case 4:
            $area=$lado1*$lado2;
            break;
        default:
            print("No puedo calcular un polígono de $lados lados");
        }
    return "El área es de ".$area." unidades cuadradas";
}

echo "Número de lados: \n";
$lados = trim(fgets(STDIN));
echo "Lado 1: \n";
$lado1 = trim(fgets(STDIN));
echo "Lado 2: \n";
$lado2 = trim(fgets(STDIN));
print(Poligono($lados,$lado1,$lado2));
