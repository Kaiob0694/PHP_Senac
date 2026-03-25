<?php

class Aluno{
    public $nome;
    public $nota1;
    public $nota2;

    public function calcularMedia(){
        return ($this ->nota1 + $this->nota2)/ 2;
    }

    public function verificarSituacao(){
        $media=  $this-> calcularMedia();

        if($media >= 7){
            return "APROVADO";
        }else{
            return "REPROVADO";
        }
    }

    public function exibirDados(){
        echo "Aluno: " . $this ->nome . "\n";
        echo "Nota 1: " . $this ->nota1 . "\n";
        echo "Nota 2: " . $this ->nota2 . "\n";


        $media = $this->calcularMedia();

        echo "Média: " .$media . "\n";
        echo "Situação: " . $this ->verificarSituacao() .  "\n";
    }
}

$aluno1 = new aluno();
echo "Digite o nome do Aluno:  ";
$aluno1 -> nome =  trim(fgets(STDIN));

echo "Digite a Primeira NOTA:  ";
$aluno1 -> nota1 =  trim(fgets(STDIN));

echo "Digite a Segunda NOTA:  ";
$aluno1 -> nota2 =  trim(fgets(STDIN));



echo "\n RESULTADO: \n";
$aluno1 -> exibirDados();
