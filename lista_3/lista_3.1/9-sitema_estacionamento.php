<?php

echo "==== SISTEMA DE ESTACIONAMENTO ====";
echo PHP_EOL;

$tipo = readline("Digite o tipo de veículo (carro, moto, caminhao): ");
$horas = readline("Digite as horas estacionadas: ");

$valorHora = 0;

switch ($tipo) {

    case "carro":
        $valorHora = 5;
        break;

    case "moto":
        $valorHora = 3;
        break;

    case "caminhao":
        $valorHora = 10;
        break;

    default:
        echo "Tipo de veículo inválido." . PHP_EOL;
        exit;
}

$valorTotal = $valorHora * $horas;

if ($horas > 5) {
    $desconto = $valorTotal * 0.10;
    $valorTotal = $valorTotal - $desconto;
}

echo PHP_EOL;
echo "Tipo de veículo: $tipo" . PHP_EOL;
echo "Horas estacionadas: $horas" . PHP_EOL;
echo "Valor final: R$ $valorTotal" . PHP_EOL;

?>