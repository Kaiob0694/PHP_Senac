<?php

echo "==== MAIOR NUMERO ====\n";

$matriz = [
    [8,5,7],
    [2,3,9],
    [7,4,1]
];

$maior = $matriz[0][0]; 
foreach ($matriz as $linha) {
    foreach ($linha as $numero) {
        if ($numero > $maior) {
            $maior = $numero;
        }
    }
}

echo "Maior número: " . $maior . PHP_EOL;