<?php

echo "==== SISTEMA DE LOGIN ====" . PHP_EOL;

$tentativas = 0;

while ($tentativas < 3) {

    $usuario = readline("USUARIO: ");
    $senha = readline("SENHA: ");

    if ($usuario === "admin" && $senha === "1234") {
        echo "ACESSO PERMITIDO";
        break;
    } else {
        echo "ACESSO NEGADO" . PHP_EOL;
        $tentativas++;
    }
}

if ($tentativas === 3) {
    echo "SISTEMA BLOQUEADO. MUITAS TENTATIVAS.";
}