<?php
echo "==== CALCULO DE DESCONTO PROGRESSIVO ====";
echo PHP_EOL;

$compra = readline("Digite o valor da COMPRA: ");

if ($compra <= 100) {

    echo "Valor ORIGINAL: $compra" . PHP_EOL;
    echo "Percentual APLICADO: 0%" . PHP_EOL;
    echo "Valor FINAL: $compra" . PHP_EOL;

} elseif ($compra > 100 && $compra <= 300) {

    $desconto = $compra * 0.10;
    $valorFinal = $compra - $desconto;

    echo "Valor ORIGINAL: $compra" . PHP_EOL;
    echo "Percentual APLICADO: 10%" . PHP_EOL;
    echo "Valor FINAL: $valorFinal" . PHP_EOL;

}else {
    $desconto20 = $compra * 0.20;
    $valorFinal = $compra - $desconto20;

    echo "Valor ORIGINAL: $compra" . PHP_EOL;
    echo "Percentual APLICADO: 20%" . PHP_EOL;
    echo "Valor FINAL: $valorFinal" . PHP_EOL;
}
?>