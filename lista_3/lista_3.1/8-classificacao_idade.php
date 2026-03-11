<?php

echo "==== CLASSIFICAÇÃO DE IDADE ====";
echo PHP_EOL;

$idade = readline("Digite sua idade: ");

if ($idade < 0) {

    echo "ERRO: Idade inválida!" . PHP_EOL;

} elseif ($idade <= 12) {

    echo "Classificação: Criança" . PHP_EOL;

} elseif ($idade <= 17) {

    echo "Classificação: Adolescente" . PHP_EOL;

} elseif ($idade <= 59) {

    echo "Classificação: Adulto" . PHP_EOL;

} else {

    echo "Classificação: Idoso" . PHP_EOL;

}

?>