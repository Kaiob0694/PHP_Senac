<?php
#REQUISITO FUNCIONAL:
# Menu de opções com valores entre 1 e 3
$opcao = 2;

switch ($opcao) {
    case 1:
        echo"Cadastrar" ;
        break;
    case 2:
        echo"listar" ;
        break;
    case 3:
        echo"Sair" ;
        break;
    
    default:
        echo"Opção invalida" ; 
        break;
}