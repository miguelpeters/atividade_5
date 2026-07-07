<?php
function  analisarTexto($texto)
{
    $palavras = str_word_count($texto);
    $caracteres = strlen($texto);
    $frases = substr_count($texto, '.');
    $vogais = preg_match_all('/[aeiou]/i', $texto);
    $consoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $texto);

    return "O texto tem $caracteres caracteres, $palavras palavras, $frases frases, $vogais vogais e $consoantes consoantes. <br>";

}

$texto = "bla bla bla bla";

echo "Texto original: $texto <br>";
echo analisarTexto($texto);