<?php

echo"==== MENU DE OPÇÕES ====" . PHP_EOL;


echo "1 - SOMAR DOIS NUMEROS" . PHP_EOL;
echo "2 - SUBTRAIR" . PHP_EOL;
echo "3 - MULTIPLICAR" . PHP_EOL;
echo "4 - DIVIDIR" . PHP_EOL;

$num1 = readline("Digite o PRIMEIRO NUMERO: ");
$num2 = readline("Digite o SEGUNDO NUMERO: ");
$opcao = readline("Digite a OPÇÃO desejada: ");

switch ($opcao) {
    case 1:
        $resultado = $num1 + $num2;
        echo"RESULTADO DA SOMA: $resultado ";
        break;
    case 2:
        $resultado = $num1 - $num2;
        echo"RESULTADO DA SUBTRAÇÃO: $resultado ";
        break;
    case 3:
        $resultado = $num1 * $num2;
        echo"RESULTADO DA MULTIPLICAÇÃO: $resultado ";
        break;
    case 4:
        $resultado = $num1 / $num2;
        echo"RESULTADO DA DIVISÃO: $resultado ";
        break;
    
    default:
        echo"Opção invalida" ; 
        break;
}

