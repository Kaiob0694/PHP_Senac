<?php

$alunos = ["Ana", "Bruno", "Carlos", "Daniela", "Eduardo"];

$nomeProcurado = readline("Qual aluno gostaria de encontrar: ");

$encontrado = false;

foreach ($alunos as $aluno) {
    if ($aluno == $nomeProcurado) {
        $encontrado = true;
        break;
    }
}

if ($encontrado) {
    echo "Aluno encontrado!";
} else {
    echo "Aluno não encontrado.";
}