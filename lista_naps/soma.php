<?php

echo "==== SOMA FACIL ====\n\n";


$num1 = readline("Digite o primeiro número: ");
while ($num1 < 1 || $num1 > 1000) {
    echo "Valor inválido! Digite um número entre 1 e 1000.\n";
    $num1 = readline("Digite o primeiro número: ");
}


$num2 = readline("Digite o segundo número: ");
while ($num2 < 1 || $num2 > 1000) {
    echo "Valor inválido! Digite um número entre 1 e 1000.\n";
    $num2 = readline("Digite o segundo número: ");
}

// Soma
$soma = $num1 + $num2;
echo "O resultado da soma é: $soma\n";

?>