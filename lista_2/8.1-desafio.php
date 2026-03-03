<?php
$segundosTotais = readline("Digite o total de segundos: ");
 
$horas   = $segundosTotais / 3600;
$resto   = $segundosTotais % 3600;
$minutos = $resto / 60;
$segundos = $resto % 60;
 
echo floor($horas) . ":". floor($minutos). ":". floor($segundos) . PHP_EOL;
 
echo sprintf("%02d:%02d:%02d", $horas, $minutos, $segundos), PHP_EOL;
 