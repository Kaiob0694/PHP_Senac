<?php

echo "==== VERIFICADOR DE ANO BISSEXTO ====";
echo PHP_EOL;

$ano = readline("Digite um ano: ");

if ( ($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0) ) {

    echo "O ano $ano é BISSEXTO." . PHP_EOL;

} else {

    echo "O ano $ano NÃO é bissexto." . PHP_EOL;

}

?>