<?php

function formatarTexto($texto) {

    echo "Texto em maiúsculas: " . strtoupper($texto) . "<br>";
    echo "Texto em minúsculas: " . strtolower($texto) . "<br>";
    echo "Primeira letra de cada palavra: " . ucwords($texto) . "<br>";
    echo "Quantidade de caracteres: " . strlen($texto);
}

formatarTexto("ola mundo");

?>