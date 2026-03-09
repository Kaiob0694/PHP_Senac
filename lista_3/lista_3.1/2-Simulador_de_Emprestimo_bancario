<?php
echo "==== SIMULADOR DE EMPRÉSTIMO ====" . PHP_EOL;

$idade = readline("Digite sua idade: ");
$salario = readline("Digite seu salário: ");
$parcela = readline("Digite o valor da parcela: ");

$limite = $salario * 0.30;

if ($idade >= 18) {
    
    if ($parcela <= $limite) {
        echo "Empréstimo aprovado!" . PHP_EOL;
    } else {
        echo "Empréstimo negado: parcela maior que 30% do salário." . PHP_EOL;
    }

} else {
    echo "Empréstimo negado: menor de idade." . PHP_EOL;
}