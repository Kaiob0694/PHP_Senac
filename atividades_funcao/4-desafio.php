<?php

$opcao = 0;
$saldo = 1000;



echo PHP_EOL;
echo "*************************************\n";
echo "Bem vindo ao Banco SENAC!!" . PHP_EOL;
echo "Nome do Cliente: Kaio Cesar Barbosa " . PHP_EOL;
echo "SALDO: R$1000 " . PHP_EOL;
echo "*************************************\n";
echo PHP_EOL;

while ($opcao != 4) {
    echo "1-Consultar Saldo Atual\n";
    echo "2-Sacar Valor\n";
    echo "3-Depositar Valor\n";
    echo "4-Sair\n";

    echo "Selecione a opção desejada: \n";
    $opcao = readline();

    if ($opcao == 1) {
        echo "---------------------------" . PHP_EOL;
        echo "SALDO ATUAL: R$$saldo\n";
        echo "---------------------------" . PHP_EOL;
    }
    elseif ($opcao == 2) {
        $saque = readline("Valor do Saque: \n");
        $saldo = $saldo - $saque;

    }
}



