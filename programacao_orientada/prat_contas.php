<?php

class Conta
{
    public $titular;
    public $saldo;

    public function depositar($valor)
    {
        $this->saldo = $this->saldo + $valor;
    }

    public function sacar($valor)
    {
        if ($valor <= $this->saldo) {
            $this->saldo = $this->saldo - $valor;
        } else {
            echo "Saldo INSUFICIENTE \n";
        }
    }
    public function exibirDados()
    {
        echo "======================================\n";
        echo "Titular: " . $this->titular . "\n";
        echo "Saldo: " . $this->saldo . "\n";
        echo "======================================\n";
    }
}
$contas = [];
$opcao = 0;

while ($opcao != 5) {
    echo "\n"; // linha em branco
    echo "1-Criar conta\n";
    echo "2-Depositar\n";
    echo "3-Sacar\n";
    echo "4-Lista de Contas\n";
    echo "5-Sair\n";

    $opcao = (int) readline("Escolha uma opção: ");

    switch ($opcao) {
        case 1:
            $conta = new Conta();
            $conta->titular = readline("Digite o nome da Titular: ");
            $conta->saldo = 0;
            $contas[] = $conta;
            echo "\nCONTA CADASTRADA COM SUCESSO!\n"; // quebra de linha
            break;

        case 2:
            foreach ($contas as $indice => $conta) {
                echo "========================================\n";
                echo "[$indice] " . $conta->titular . "\n";
                echo "========================================\n";
            }
            break;
    }
}