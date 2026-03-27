<?php

class Produto
{
    public $nome;
    public $preco;
    public $quantidade;

    public function calcularValorTotal()
    {
        return $this->preco = $this->preco * $this->quantidade;
    }

    public function exibirDados()
    {
        echo "\n";
        echo "Nome: " . $this->nome . "\n";
        echo "Preço: R$" . $this->preco . "\n";
        echo "Quantidade: " . $this->quantidade . "\n";
        echo "Valor TOTAL: R$" . $this->calcularValorTotal() . "\n";
    }
}
$produtos = [];


while (true) {
    echo "\n==========================\n";
    echo "1. Adicionar Produto\n";
    echo "2. Lista Produto\n";
    echo "3. Sair\n";
    echo "==========================\n";
    $opcao = readline("Digite a opção desejada: ");
    switch ($opcao) {
        case '1':
            $item = new Produto();
            echo "\n";
            echo "-----CADASTRO DE PRODUTOS-----\n";
            $item->nome = readline("Nome do Produto: ");
            $item->preco = (float)readline("Valor: ");
            $item->quantidade = (int)readline("Quantidade: ");
            echo "\n*PRODUTO CADASTRADO COM SUCESSO!*";
            echo "\n";
            $produtos[] = $item;
            break;

        case '2':
            echo "\n";
            echo "-----LISTAR PRODUTOS-----\n";
            echo "\n";
            foreach ($produtos as $item) {
                $item->exibirDados();
            }
            break;

        default:
            # code...
            break;
    }
}