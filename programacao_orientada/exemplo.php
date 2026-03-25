<?php

class Pessoa {
    // Atributos (características)
    public $nome;
    public $idade;

    // Método construtor (executa ao criar o objeto)
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // Método (ação)
    public function apresentar() {
        return "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos.";
    }
}

// Criando objetos (instâncias da classe)
$pessoa1 = new Pessoa("Kaio", 25);
$pessoa2 = new Pessoa("Maria", 30);

// Usando os métodos
echo $pessoa1->apresentar();
echo "\n";
echo $pessoa2->apresentar();

?>