<?php
echo"==== SISTEMA DE APROVAÇÃO COMPLETO ==== ";

echo PHP_EOL;

$nota = readline("Digite aqui sua NOTA: ");
$frequencia = readline("Digite aqui sua FREQUÊNCIA(%): ");

if($nota >= 7 && $frequencia >= 75){
    echo"APROVADO";
}elseif($nota >= 7 && $frequencia < 75){
    echo "REPROVADO por FALTA";
}elseif($nota < 7){
    echo "REPROVADO por NOTA";
}
