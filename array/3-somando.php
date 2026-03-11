<?php

echo "==== SOMANDO VETORES ====" . PHP_EOL;

$numeros = [];
$soma = 0;

for ($i = 1; $i <= 5; $i++) {
    $numeros[$i] = readline("Digite o número: ");
}

foreach ($numeros as $numero) {
    $soma = $soma + $numero;
}

echo "Soma = " . $soma . PHP_EOL;

?>