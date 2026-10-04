<?php

function estatisticasNumericas($numeros) {

    $soma = array_sum($numeros);
    $media = $soma / count($numeros);
    $maior = max($numeros);
    $menor = min($numeros);

    // Mediana
    sort($numeros);
    $quantidade = count($numeros);
    $meio = floor($quantidade / 2);

    if ($quantidade % 2 == 0) {
        $mediana = ($numeros[$meio - 1] + $numeros[$meio]) / 2;
    } else {
        $mediana = $numeros[$meio];
    }

    $pares = 0;
    $impares = 0;

    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    echo "Soma: $soma<br>";
    echo "Média: $media<br>";
    echo "Maior valor: $maior<br>";
    echo "Menor valor: $menor<br>";
    echo "Mediana: $mediana<br>";
    echo "Quantidade de pares: $pares<br>";
    echo "Quantidade de ímpares: $impares";
}

$numeros = [10, 5, 8, 3, 7, 2, 9];

estatisticasNumericas($numeros);

?>