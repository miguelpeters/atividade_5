<?php

include "funcoes.php";

echo "IMC: " . calcularIMC(70, 1.75) . "<br>";

echo "Email: " . validarEmail("teste@gmail.com") . "<br>";

echo "Senha aleatória: " . gerarSenha() . "<br>";

echo "Vogais: " . contarVogais("Olá mundo") . "<br>";

echo "Texto invertido: " . inverterTexto("PHP") . "<br>";

echo "Idade: " . calcularIdade(2008) . "<br>";

echo "Moeda: R$ " . converterMoeda(10) . "<br>";

echo "Telefone: " . formatarTelefone("47999999999") . "<br>";

echo "Saudação: " . gerarSaudacao(15) . "<br>";

echo "Senha: " . validarSenhaForte("Senha123") . "<br>";

?>