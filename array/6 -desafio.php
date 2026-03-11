<?php

$numeros = [];


echo "===== MENU ===== \n ";
echo "1 - Cadastrar Número \n ";
echo "2 - Mostrar Número \n ";
echo "3 - Mostrar Maior Número \n ";
echo "4 - Média \n ";
echo "5 - Sair \n ";

$opcao = readline("Digite sua opção: ");

if ($opcao == 1) {
    $numero = readline("Digite o numero: \n");
    $numeros[] = $numero;

    echo"Número Cadastrado com Sucesso!";
}
