<?php
 
$alunos = [];
$opcao = 0;
 
while ($opcao != 5) {
 
    echo "\n===== SISTEMA DE ALUNOS =====\n";
    echo "1 - Cadastrar aluno\n";
    echo "2 - Listar alunos\n";
    echo "3 - Buscar aluno\n";
    echo "4 - Ordenar alunos\n";
    echo "5 - Sair\n";
 
    echo "Escolha uma opção: ";
    $opcao = readline();
 
    // CADASTRAR
    if ($opcao == 1) {
 
        echo "Digite o nome do aluno: ";
        $nome = readline();
 
        $alunos[] = $nome;
 
        echo "Aluno cadastrado!\n";
    }
 
    // LISTAR
    elseif ($opcao == 2) {
 
        echo "\nLista de alunos:\n";
 
        foreach ($alunos as $aluno) {
            echo "- $aluno\n";
        }
    }
 
    // BUSCAR
    elseif ($opcao == 3) {
 
        echo "Digite o nome para buscar: ";
        $busca = readline();
 
        $encontrado = false;
 
        foreach ($alunos as $aluno) {
 
            if ($aluno == $busca) {
                $encontrado = true;
            }
        }
 
        if ($encontrado) {
            echo "Aluno encontrado!\n";
        } else {
            echo "Aluno não encontrado.\n";
        }
    }
 
    // ORDENAR
    elseif ($opcao == 4) {
 
        sort($alunos);
 
        echo "Lista ordenada!\n";
    }
 
}
 
echo "Sistema encerrado.\n";
 
?>