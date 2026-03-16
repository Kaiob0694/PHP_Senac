<?php

echo "==== CALCULANDO A ÁREA DO QUADRADO ====\n\n";

$lado1 = readline("Digite o valor do LADO A (1 a 1000): ");

while ($lado1 < 1 || $lado1 > 1000) {
    echo "Valor inválido! Digite um número entre 1 e 1000.\n";
    $lado1 = readline("Digite o valor do LADO A: ");
}

$lado2 = readline("Digite o valor do LADO B (1 a 1000): ");

while ($lado2 < 1 || $lado2 > 1000) {
    echo "Valor inválido! Digite um número entre 1 e 1000.\n";
    $lado2 = readline("Digite o valor do LADO B: ");
}

$area = $lado1 * $lado2;

echo "A área do quadrado é: $area\n";

?>