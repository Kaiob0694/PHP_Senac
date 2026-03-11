<?php

$numero = [];

for ($i = 1; $i <= 10; $i++) { 
    $numero[$i] = readline("Digite o número: ");
}

foreach ($numero as $numero1) {
    if ($numero1 % 2 == 0) {
        echo $numero1 . " é par" . PHP_EOL;
    }
}

?>
