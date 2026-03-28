
<?php
class Funcionario
{
    public $nome;
    public $cargo;
    public $salario;
    public $cpf;
    public $estadoCivil;
    public $nacionalidade;


    public function __construct($nome, $cargo, $salario, $cpf, $estadoCivil, $nacionalidade)
    {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
        $this->cpf = $cpf;
        $this->estadoCivil = $estadoCivil;
        $this->nacionalidade = $nacionalidade;
    }

    public function exibirDados()
    {
        echo "\n";
        echo "--------------------------------------\n";
        echo "Nome: " . $this->nome . "\n";
        echo "Cargo: " . $this->cargo . "\n";
        echo "Salário: " . $this->salario . "\n";
        echo "CPF: " . $this->cpf . "\n";
        echo "Estado Civil: " . $this->estadoCivil . "\n";
        echo "Nacionalidade: " . $this->nacionalidade . "\n";
        echo "--------------------------------------";
        echo "\n";
    }

    public function aumentoSalario()
    {
        return $this->salario = ($this->salario * 0.10) + $this->salario;
    }
}

$funcionarios = [];
while (true) {
    echo "\n";
    echo "-------------------------------\n";
    echo "//----SISTEMA DE CADASTRO----//\n";
    echo "//------------DE-------------//\n";
    echo "//-------FUNCIONARIOS--------//\n";
    echo "-------------------------------\n";
    echo "\n";
    echo "1.Cadastrar Funcionário\n";
    echo "2.Listar Funcionário\n";
    echo "3.Aumentar Salário\n";
    echo "4.Buscar Funcionario\n";
    echo "5.Sair\n";
    echo "\n";
    $opcao = readline("Digite a opção desejada: ");
    switch ($opcao) {
        case '1':
            echo "\n";
            echo "---------------------------------------\n";
            echo "//      CADASTRO DE FUNCIONARIO      //\n";
            echo "---------------------------------------\n";

            for ($i = 0; $i < 3; $i++) {
                echo "\nFuncionario " . ($i + 1) . "\n";

                $nome = readline("Nome: ");
                $cargo = readline("Cargo: ");
                $salario = (float)readline("Salário: ");
                $cpf = (float)readline("CPF: ");
                $estadoCivil = readline("Estado Civil: ");
                $nacionalidade = readline("Nacionalidade: ");

                $funcionarios[] = new Funcionario($nome, $cargo, $salario, $cpf, $estadoCivil, $nacionalidade);
                echo "\n";
                echo "-----FUNCIONARIO CADASTRADO COM SUCESSO!-----\n";
            }
            break;


        case '2':
            echo "\n";
            echo "=======LISTA DE FUNCIONARIOS=======";
            foreach ($funcionarios as $funcionario) {
                $funcionario->exibirDados();
            }
            break;

        case '3':
            $encontrado = false;

            echo "\n";
            echo "=======AUMENTAR SALÁRIO=======\n";

            $nomeBusca = readline("Buscar Funcionario: ");

            foreach ($funcionarios as $funcionario) {
                if (strtolower($funcionario->nome) == strtolower($nomeBusca)) {
                    echo "Funcionario encontrado!\n";
                    $funcionario->exibirDados();

                    // AUMENTA SALÁRIO
                    $funcionario->aumentoSalario();

                    echo "Salário atualizado!\n";
                    $funcionario->exibirDados();

                    $encontrado = true;
                    break;
                }
            }

            // 🔥 AQUI FORA DO FOREACH
            if (!$encontrado) {
                echo "Funcionario NÃO ENCONTRADO\n";
            }

            break;


        default:


            break;
    }
}
