<?php

function calcularMedia($notas) {

    $maior = max($notas);
    $menor = min($notas);
    $media = array_sum($notas) / count($notas);

    if ($media >= 7) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    echo "Maior nota: $maior<br>";
    echo "Menor nota: $menor<br>";
    echo "Média: $media<br>";
    echo "Situação: $situacao";
}

$notas = [8, 7, 6, 9];

calcularMedia($notas);

?>