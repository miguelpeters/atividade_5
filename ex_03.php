<?php

function mascararCpf($dadoOriginal){
    



$mascara = str_repeat("*", 7);
return $mascara;
$dadoMascarado = substr_replace($dadoOriginal, $mascara, 4, 7);
return $dadoMascarado;
}

$dadoOriginal = "123.456.789-00";
echo "o cpf original é : 123.456.789-00 <br>";
echo "Resultado : " .mascararCpf($dadoOriginal);

?>