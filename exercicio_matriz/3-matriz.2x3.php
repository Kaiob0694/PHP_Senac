<?php

echo "==== SOMA TOTAL DA MATRIZ ====\n";

$matriz = [
    [1,2,3],
    [5,3,4]
];

$somaTotal = 0;

foreach ($matriz as $linha) {
    foreach ($linha as $numero) {
        $somaTotal += $numero;
    }
}

echo "Soma total: " . $somaTotal . PHP_EOL;