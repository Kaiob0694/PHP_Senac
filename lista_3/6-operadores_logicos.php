<?php
echo"==== LOGIN ====";

echo PHP_EOL;

$usuario = readline("Digite seu LOGIN: ");
$senha = readline("Digite sua SENHA:");

if ($usuario == "admin" && $senha == "1234") {

echo "Acesso permitido";

} else {

echo "Acesso negado";

}


?>