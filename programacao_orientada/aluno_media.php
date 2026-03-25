<?php

$alunos = [];

class Aluno {
    public $nome;
    public $nota1;
    public $nota2;

    public function calcularMedia() {
        return ($this->nota1 + $this->nota2) / 2;
    }

    public function verificarSituacao() {
        return $this->calcularMedia() >= 7 ? "APROVADO" : "REPROVADO";
    }

    public function exibirDados() {
        echo "Aluno: " . $this->nome . "\n";
        echo "Nota 1: " . $this->nota1 . "\n";
        echo "Nota 2: " . $this->nota2 . "\n";
        echo "Média: " . $this->calcularMedia() . "\n";
        echo "Situação: " . $this->verificarSituacao() . "\n";
        echo "----------------------\n";
    }
}

while (true) {

    echo "\n1 - Cadastrar aluno\n";
    echo "2 - Listar alunos\n";
    echo "3 - Sair\n";
    echo "Escolha: ";

    $opcao = readline();

    switch ($opcao) {

        // ✅ CADASTRAR
        case 1:
            $aluno = new Aluno();

            echo "Digite o nome: ";
            $aluno->nome = readline();

            echo "Digite a Nota 1: ";
            $aluno->nota1 = (float) readline();

            echo "Digite a Nota 2: ";
            $aluno->nota2 = (float) readline();

            $alunos[] = $aluno;

            echo "Aluno cadastrado!\n";
            break;

        // ✅ LISTAR
        case 2:
            if (count($alunos) == 0) {
                echo "Nenhum aluno cadastrado.\n";
            } else {
                foreach ($alunos as $aluno) {
                    $aluno->exibirDados();
                }
            }
            break;

        // ✅ SAIR
        case 3:
            echo "Encerrando...\n";
            exit;

        default:
            echo "Opção inválida!\n";
    }
}