<?php

echo "==== CONVERSÃO DE SEGUNDO";
echo PHP_EOL;

$segundo = readline("Digite os segundos: ");

$horas = ($segundo - ($segundo % 3600)) / 3600;
$resto = $segundo % 3600; 
$minutos = ($resto - ($resto % 60)) / 60;
$segresultado = $resto % 60;

echo PHP_EOL;

echo "Horas: $horas" . PHP_EOL;
echo "Minutos: $minutos" . PHP_EOL;
echo "Segundos: $segresultado" . PHP_EOL;
?>