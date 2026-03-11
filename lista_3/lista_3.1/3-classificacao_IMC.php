<?php
echo "==== CALCULADORA DE IMC ====";

echo PHP_EOL;

$peso = (float) readline("Digite seu peso: ");
$altura = (float) readline("Digite sua ALTURA: ");

$imc = $peso / ($altura * $altura);

echo "Seu IMC é: " . number_format($imc, 2) . PHP_EOL;

if ($imc < 18.5) {
    echo "Abaixo do peso";
} elseif ($imc < 25) {
    echo "Peso Normal";
} elseif ($imc < 30) {
    echo "Sobrepeso";
} elseif ($imc < 35) {
    echo "Obesidade Grau I";
} elseif ($imc < 40) {
    echo "Obesidade Grau II";
} else {
    echo "Obesidade Grau III";
}