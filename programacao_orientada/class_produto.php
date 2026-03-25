<?php

class Produto {
    // Atributos
    public $nome;
    public $preco;
    public $quantidade;

    // Método de exibição de dados
    public function exibirDados() {
        echo "Produto: " . $this->nome . "\n";
        echo "Preço: R$ " . $this->preco . "\n";
        echo "Quantidade: " . $this->quantidade . "\n";
    }

    // Método para calcular valor total
    public function calcularValorTotal() {
        return $this->preco * $this->quantidade;
    }
}

$produto1 = new Produto();

$produto1 -> nome = "Teclado";
$produto1 -> preco = 100;
$produto1 -> quantidade = 3;

$produto1 ->exibirDados();

$total = $produto1 -> calcularValorTotal();
echo "-------------------------------------------\n";
echo "Valor Total em estoque: "  . $total . "\n";
echo "-------------------------------------------\n";
echo  PHP_EOL;

$produto2 = new Produto();

$produto2 -> nome = "Monitor";
$produto2 -> preco = 250;
$produto2 -> quantidade = 8;

$produto2 ->exibirDados();

$total = $produto2 -> calcularValorTotal();
echo "---------------------------------------------\n";
echo "Valor Total em estoque: "  . $total . "\n";
echo "---------------------------------------------\n";