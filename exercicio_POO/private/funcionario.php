<?php

class Funcionario
{
    private $nome;
    private $cargo;
    private $salario;

    public function __construct($nome, $cargo, $salario)
    {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function exibirDados()
    {
        echo "-----------------------------------\n";
        echo "Nome do Funcionario: " . $this->nome . "\n";
        echo "Cargo: " . $this->cargo . "\n";
        echo "Salário: R$" . $this->salario . "\n";
        echo "------------------------------------\n";
        echo "\n";
    }

    public function aumentarSalario()
    {
        $this->salario = ($this->salario * 0.10) + $this->salario;
    }
}

$funcionarios = [];

echo "\n";
echo "---------------------------------------\n";
echo "//      CADASTRO DE FUNCIONARIO      //\n";
echo "---------------------------------------\n";

for ($i = 0; $i < 3; $i++) {
    echo "\nFuncionario " . ($i + 1) . "\n";

    $nome = readline("Nome: ");
    $cargo = readline("Cargo: ");
    $salario = (float)readline("Salário: ");
    $funcionarios[] = new Funcionario($nome, $cargo, $salario);
    echo "\n**** CADASTRO EFETUADO **** \n";
    echo "\n";
}

echo "\n";
echo "---------------------------------------\n";
echo "//      LISTA DE FUNCIONARIO      //\n";
echo "---------------------------------------\n";

foreach ($funcionarios as $funcionario) {
    $funcionario->exibirDados();
}
