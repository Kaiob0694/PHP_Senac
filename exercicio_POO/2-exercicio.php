<?php

class Produtos{
    public $produto;
    public $preco;

    public function __construct($produto, $preco) {
    $this->produto = $produto;
    $this->preco = $preco;
    }

    public function visualizarProdutos(){
        echo "\n";
        echo "Produto: " . $this ->produto . "\n";
        echo "Preço: " . $this ->preco ." R$\n";
        echo "---------------------------------------";
    }
}
    $produto1 = new Produtos("Arroz", 10);
    $produto2 = new Produtos("feijão", 8);

    echo $produto1->visualizarProdutos();
    echo $produto2->visualizarProdutos();