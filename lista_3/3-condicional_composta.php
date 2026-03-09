<?php
 echo"==== VERIFICAÇÃO DE NUMERO PAR OU ÍMPAR ====" ;

 echo PHP_EOL;

 $nuemro = readline("Digite a seu numero: ");

 if($nuemro % 2 == 0){
    echo"Seu numero é PAR";
 }else{
    echo"Seu numero é ÍMPAR";
 }