<?php

echo "==== O NÚMERO É POSITIVO OU NEGATIVO ====\n";

$num1 = readline("Digite o número desejado: ");


while ($num1 < -1000 || $num1 > 1000) {
    echo "Valor inválido! Digite um número entre -1000 e 1000.\n";
    $num1 = readline("Digite o número desejado: ");
}


if ($num1 > 0) {
    echo "POSITIVO\n";
} elseif ($num1 < 0) {
    echo "NEGATIVO\n";
} else {
    echo "O número é ZERO\n";
}

?>