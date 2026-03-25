<?php

class Aluno { # A Classe foi criada
    public $nome;
    public $nota1;   # As atribuição da Classe
    public $nota2;   # Cada aluno vai ter um NOME -- NOTA1 -- NOTA 2--

    public function calcularMedia() { # Uma função para atribuir a média $THIS = "esse aluno atual"
        return ($this->nota1 + $this->nota2) / 2; # Então poda vez que chamar essa função ele vai retornar a média
    }

    public function verificarSituacao() { # Função de verificação de APROVAÇÃO do aluno
        $media = $this->calcularMedia();

        if ($media >= 7) {
            return "APROVADO";
        } else {
            return "REPROVADO";
        }
    }

    public function exibirDados() { # Função de vizualizar tudo do Aluno
        echo "Aluno: " . $this->nome . "\n";
        echo "Nota 1: " . $this->nota1 . "\n";
        echo "Nota 2: " . $this->nota2 . "\n";
        echo "Média: " . $this->calcularMedia() . "\n";  #Ultilizando outro função
        echo "Situação: " . $this->verificarSituacao() . "\n";
        echo "------------------------\n";
    }
}

$alunos = []; # Vetores
$opcao = 0;

while ($opcao != 3) {

    echo "\n---------------------------------\n";
    echo "1 - Adicionar aluno\n";
    echo "2 - Listar alunos\n";
    echo "3 - Sair\n";
    echo "---------------------------------\n";
    echo "Escolha uma opção: ";

    $opcao = readline();

    switch ($opcao) {

        case 1:
            $aluno = new Aluno();

            echo "Digite o nome do Aluno: ";
            $aluno->nome = trim(readline());

            echo "Digite a Primeira NOTA: ";
            $aluno->nota1 = trim(readline());

            echo "Digite a Segunda NOTA: ";
            $aluno->nota2 = trim(readline());

            $alunos[] = $aluno;

            echo "Aluno cadastrado!\n";
            break;

        case 2:
            echo "\n=== RESULTADOS ===\n";

            if (count($alunos) == 0) {
                echo "Nenhum aluno cadastrado.\n";
            } else {
                foreach ($alunos as $aluno) {
                    $aluno->exibirDados(); // 👈 usando seu método
                }
            }
            break;

        case 3:
            echo "Encerrando o programa...\n";
            break;

        default:
            echo "Opção inválida!\n";
    }
}