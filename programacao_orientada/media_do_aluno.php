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