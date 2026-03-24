<?php

$numeros = [2,5,3,6,4];
$somaTotal = 0;

foreach ($numeros as $numero) {
    echo $numero . PHP_EOL; // mostra cada número
    $somaTotal += $numero; 
}

echo "Total: " . $somaTotal;