<?php

$matriz = [ #declatando matriz
    [1,2,3],
    [4,5,6],
    [7,8,9]
];


foreach ($matriz as $linha) {
    foreach ($linha as $valor){
        echo $valor . " ";
    }
    echo PHP_EOL;
}