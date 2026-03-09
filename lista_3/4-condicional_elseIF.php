<?php
echo "==== CLASSIFICAÇÃO DE NOTA ====";

echo PHP_EOL;

$nota = readline("Digite sua nota: ");

if ($nota >= 9) {
    echo "EXCELENTE";
} elseif ($nota >= 7) {
    echo "Bom";
} else {
    echo "REPROVADO";
}