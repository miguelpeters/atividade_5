<?php

function criptografarMensagem($texto) {
    $resultado = "";

    for ($i = 0; $i < strlen($texto); $i++) {
        $letra = $texto[$i];

        if ($letra >= 'a' && $letra <= 'z') {
            $resultado .= chr((ord($letra) - ord('a') + 3) % 26 + ord('a'));
        } else {
            $resultado .= $letra;
        }
    }

    return $resultado;
}

function descriptografarMensagem($texto) {
    $resultado = "";

    for ($i = 0; $i < strlen($texto); $i++) {
        $letra = $texto[$i];

        if ($letra >= 'a' && $letra <= 'z') {
            $resultado .= chr((ord($letra) - ord('a') - 3 + 26) % 26 + ord('a'));
        } else {
            $resultado .= $letra;
        }
    }

    return $resultado;
}


$mensagem = "ola mundo";

$criptografada = criptografarMensagem($mensagem);
$descriptografada = descriptografarMensagem($criptografada);

echo "Mensagem original: $mensagem<br>";
echo "Mensagem criptografada: $criptografada<br>";
echo "Mensagem descriptografada: $descriptografada";

?>