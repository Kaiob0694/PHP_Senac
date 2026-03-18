<?php

function ehPar($numero){
return $numero % 2 ;
}
$resultado = ehPar(2);
    if ($resultado == 0) {        
        echo "Eh Par!";
    }else{
        echo "Eh Impar";
    }
