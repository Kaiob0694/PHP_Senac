<?php

$numeros = [8, 3, 1, 7, 4, 9, 2, 6];

echo "Vetor original: " . implode(", ", $numeros) . PHP_EOL;

sort($numeros);

echo "Vetor ordenado: " . implode(", ", $numeros) . PHP_EOL;