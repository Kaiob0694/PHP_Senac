<?php

$idade = 20;
$cnh = true;

var_dump($idade);
echo PHP_EOL;
var_dump($cnh);
echo PHP_EOL;

if($idade >= 18){
    if($cnh){
        echo "Pode dirigir";
    }else{
        echo "Precisa tirar CNH";
    }
}else{
    echo "Você não pode dirigir" . PHP_EOL;
}