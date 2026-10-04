<?php

function calcularIMC($peso, $altura) {
    return $peso / ($altura * $altura);
}

function validarEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) ? "Válido" : "Inválido";
}

function gerarSenha() {
    return rand(100000, 999999);
}

function contarVogais($texto) {
    $contador = 0;

    for ($i = 0; $i < strlen($texto); $i++) {
        if (strpos("aeiouAEIOU", $texto[$i]) !== false) {
            $contador++;
        }
    }

    return $contador;
}

function inverterTexto($texto) {
    return strrev($texto);
}

function calcularIdade($ano) {
    return date("Y") - $ano;
}

function converterMoeda($valor) {
    return $valor * 5;
}

function formatarTelefone($telefone) {
    return "(" . substr($telefone, 0, 2) . ") " .
           substr($telefone, 2, 5) . "-" .
           substr($telefone, 7);
}

function gerarSaudacao($hora) {
    if ($hora < 12) {
        return "Bom dia";
    } elseif ($hora < 18) {
        return "Boa tarde";
    } else {
        return "Boa noite";
    }
}

function validarSenhaForte($senha) {
    if (strlen($senha) >= 8 && preg_match("/[A-Z]/", $senha) && preg_match("/[0-9]/", $senha)) {
        return "Senha forte";
    }

    return "Senha fraca";
}

?>