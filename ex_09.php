<?php

function analisarNumero($numero) {

    echo "Número analisado: $numero<br><br>";

    if ($numero % 2 == 0) {
        echo "Par<br>";
    } else {
        echo "Ímpar<br>";
    }

    $divisores = 0;

    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            $divisores++;
        }
    }

    if ($divisores == 2) {
        echo "Primo<br>";
    } else {
        echo "Não é primo<br>";
    }

    $soma = 0;

    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $soma += $i;
        }
    }

    if ($soma == $numero) {
        echo "Perfeito";
    } else {
        echo "Não é perfeito";
    }
}

analisarNumero(28);

?>