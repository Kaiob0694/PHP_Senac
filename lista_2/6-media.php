<?php
echo "==== MÉDIA ====";

echo PHP_EOL;

$nota1 = readline("Digite a primiera nota: ");
$nota2 = readline("Digite a segunda nota: ");
$nota3 = readline("Digite a terceira nota: ");
$media = ($nota1 + $nota2 + $nota3) / 3;

echo PHP_EOL;

echo "A MÉDIA É: $media";
