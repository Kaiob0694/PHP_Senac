<?php

class Aluno
{
    public $nome;
    public $nota1;
    public $nota2;

    public function calcularMedia()
    {
        return ($this->nota1 + $this->nota2) / 2;
    }

    public function verificarSituacao()
    {
        $media = $this->calcularMedia();

        if ($media >= 7) {
            return "APROVADO";
        } else {
            return "REPROVADO";
        }
    }

    public function exibirDados()
    {
        echo "\n";
        echo "Aluno: " . $this->nome . "\n";
        echo "Nota 1: " . $this->nota1 . "\n";
        echo "Nota 2: " . $this->nota2 . "\n";


        $media = $this->calcularMedia();

        echo "Média: " . $media . "\n";
        echo "-----------------------------------------------------\n";
        echo "Situação: " . $this->verificarSituacao() . "\n";
        echo "-----------------------------------------------------";
        echo "\n";
    }
}

/* $aluno1 = new aluno();
echo "Digite o nome do Aluno:  ";
$aluno1 -> nome =  trim(fgets(STDIN));

echo "Digite a Primeira NOTA:  ";
$aluno1 -> nota1 =  trim(fgets(STDIN));

echo "Digite a Segunda NOTA:  ";
$aluno1 -> nota2 =  trim(fgets(STDIN));



echo "\n RESULTADO: \n";
$aluno1 -> exibirDados(); */

/*-------------------------------------------------------------------------------------*/

$estudantes = [];

while (true) {
    echo "\n";
    echo "1-Adicionar ESTUDANTES e NOTAS\n";
    echo "2-LISTAR\n";
    echo "3-SAIR\n";
    $opcao = readline("Digite o que deseja fazer: ");

    switch ($opcao) {
        case '1':
            $aluno1 = new aluno();
            echo "Digite o nome do Aluno:  ";
            $aluno1->nome = trim(fgets(STDIN));

            echo "Digite a Primeira NOTA:  ";
            $aluno1->nota1 = trim(fgets(STDIN));

            echo "Digite a Segunda NOTA:  ";
            $aluno1->nota2 = trim(fgets(STDIN));

            echo "\n ------------------------------- \n";
            echo "\n CADASTRO FEITO COM SUCESSO \n";
            echo "\n ------------------------------- \n";
            
            

            $estudantes[] = $aluno1;

        break;    

        case '2':
            foreach ($estudantes as $aluno1) {
                $aluno1->exibirDados();
            }
            break;    
            

        case '3':
            echo "encerrando...\n";
            exit;        
        default:
            echo "Opção invalida\n";
            break;
    }
}