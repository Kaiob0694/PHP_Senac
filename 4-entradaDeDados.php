<?php
echo "Quem é você?". PHP_EOL;
$usuario = $argv[1];
echo "Ah, olá ". $usuario . "! Tudo bem?";
 
echo "Em qual UC você está? Me responda com apenas números" . PHP_EOL;
$uc = fgets(STDIN);
echo "Certo, então você está na UC" . $uc . "." . PHP_EOL;