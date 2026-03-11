<?php
 $notas = [];

 for ($i=0; $i < 5 ; $i++) { 
    $notas[$i] = readline("Cadastre seu cliente: ");
 }

 foreach ($notas as $nota){
    echo $nota . PHP_EOL;
 }

 ?>