<?php

echo "==== TABUADAS ====";
echo PHP_EOL;

$numero = (int)readline("Digite qual tabuada: ");

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado" . PHP_EOL;
}

?>