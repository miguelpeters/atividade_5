<?php

function  gerarSenha($tamanho_senha){
    
$caracteres = "0123456789abcdefghijklmnopqrstuvwxyz!@#&*_-";
$aleatorio = substr(str_shuffle($caracteres), 0, $tamanho_senha);
return $aleatorio;

}

$tamanho_senha = 8;
$senha = 0;
echo "Senha aleatoria : " .gerarSenha($tamanho_senha);

?>