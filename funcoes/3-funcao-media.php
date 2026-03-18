<?php
function calcularMedia($n1,$n2,$n3){
    $media = ($n1 + $n2 + $n3) / 3;
    return  $media;
    
}

$mediaAluno = calcularMedia(8, 8,9);
echo "Média do Aluno: " .round($mediaAluno,2) . PHP_EOL;








 
 
  function Media($n1,$n2,$n3){
    $soma = $n1 +$n2 +$n3;
    $media = $soma /3;
    return $media;
  }
 
  $mediaAluno1 = Media(7,8,9);
  echo "Media do Aluno: $mediaAluno1\n";