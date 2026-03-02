<?php

$nome = readline("Qual é seu nome? ");
echo "Olá $nome" . PHP_EOL;

$cidade = readline("Em que cidade você mora? ");
$filme = readline("Qual é o seu filme favorito? ");
$genero = readline("Qual o gênero do seu filme? ");
$duracao = readline("Digite a duração do seu filme (em minutos): ");

echo PHP_EOL;
echo "----- RESUMO -----" . PHP_EOL;
echo "Cidade: $cidade" . PHP_EOL;
echo "Filme escolhido: $filme" . PHP_EOL;
echo "Gênero do filme: $genero" . PHP_EOL;
echo "Duração: $duracao minutos" . PHP_EOL;

echo PHP_EOL;
$animal = readline("Digite seu animal animal favorito? ");
$cor = readline("Digite sua cor favorito? ");

echo PHP_EOL;
echo "Seu animal favorito é $animal e sua cor favorita é $cor!";

echo PHP_EOL;
$user = readline("Digite seu usuario: ") . PHP_EOL;
$descri = readline("Crie uma pequena descrição sobre sí: ") . PHP_EOL;
echo PHP_EOL;

echo "Cadastro relizado com SUCESSO!" . PHP_EOL;
echo "UserName: $user" . PHP_EOL;
echo "DESCRIÇÃO: " . PHP_EOL;
echo "$descri"


?>