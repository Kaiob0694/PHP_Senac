<?php

$matriz =  [
    [8,5,7],
    [2,3,9],
    [7,4,1]
];

foreach ($matriz as $linha) {
    foreach ($linha as $valor){
        echo $valor . " ";
    }
    echo PHP_EOL;
}

?>