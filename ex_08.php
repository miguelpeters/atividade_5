<?php

function ordenarNomes($nomes){
$lista = explode(",", $nomes);
$lista = array_map("trim", $lista);
$lista = array_filter($lista);
sort($lista, SORT_STRING);
return $lista;
}
$nomes = "Theo, Tiago, Leonardo, Miguel";
$resultado = ordenarNomes($nomes);
print_r($resultado);