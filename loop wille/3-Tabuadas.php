<?php

echo "==== TABUADAS ====";
echo PHP_EOL;

for ($i = 1; $i <= 5; $i++) {

    for ($j = 1; $j <= 10; $j++) {
        $resultado = $i * $j;
        echo "$i x $j = $resultado" . PHP_EOL;
    }

    echo PHP_EOL;
}