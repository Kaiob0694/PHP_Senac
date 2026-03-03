<?php
echo "==== CALCULANDO DESCONTO ====";

echo PHP_EOL;

$prod = readline("Digite o valor do PRODUTO: ");
$perc = readline("Digite o valor do DESCONTO(%): ");
$desconto = $prod * $perc / 100;
$pfinal = $prod - $desconto;

echo PHP_EOL;


echo "==== RESULTADO ====" . PHP_EOL;
echo "VOLOR DO DESCONTO: $desconto R$" . PHP_EOL;
echo "PREÇO FINAL DO PRODUTO: $pfinal R$" . PHP_EOL;

?>
