<?php

echo"==== MENU ====" . PHP_EOL;
echo "1-Cadastrar" . PHP_EOL;
echo "2-Listar" . PHP_EOL;
echo "3-Excluir" . PHP_EOL;

echo PHP_EOL;

$opcao = readline("Digite a opção desejada: ") ;

switch ($opcao) {

case 1:

echo "Cadastrar selecionado";

break;

case 2:

echo "Listar selecionado";

break;

case 3:

echo "Excluir selecionado";

break;

default:

echo "Opção inválida";

}

?>