<?php
class Aluno{
    public $nome;
    public $nota;


    public function exibirDados(){
        echo "\n";
        echo "================================\n";
        echo "Aluno: " . $this->nome . "\n";
        echo "Nota: " . $this->nota . "\n";
        echo "================================\n";
        
    }

}

$alunos = [];

$aluno1 = new Aluno();
$aluno1->nome = readline("Nome do Aluno: ");
$aluno1->nota = readline("NOTA: ");
$alunos[] = $aluno1;

$aluno2 = new Aluno();
$aluno2->nome = readline("Nome do Aluno: ");
$aluno2->nota = readline("NOTA: ");
$alunos[] = $aluno2;

$aluno3 = new Aluno();
$aluno3->nome = readline("Nome do Aluno: ");
$aluno3->nota = readline("NOTA: ");
$alunos[] = $aluno3;

foreach ($alunos as $aluno) {
    $aluno->exibirDados();
}