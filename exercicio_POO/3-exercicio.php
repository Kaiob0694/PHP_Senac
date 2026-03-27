<?php
class Funcionario{
    public $nome;
    public $salario;

    public function aumentarSalario(){
        $this->salario = $this->salario +($this->salario*0.10);
    }

    public function exibirDados(){
        echo "Funcionario: " . $this->nome . "\n";
        echo "Salário: R$" . $this->salario . "\n";
    }

    
}

$funcionario = new Funcionario();
$funcionario->nome = readline("Digite o Nome do Funcionario: ");
$funcionario->salario = readline("Digite o SALARIO: ");
echo "\n--------SEM AUMENTO--------\n";
$funcionario->exibirDados();
$funcionario->aumentarSalario();
echo "\n--------COM AUMENTO--------\n";
$funcionario->exibirDados();
echo "\n";
