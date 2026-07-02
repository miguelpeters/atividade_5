<?php

// (x² = y²) / (x+y)

function calcularFormula($x,$y){
if ($x + $y == 0){return
"Não é possivel realizar a divisao por zero";
}

$resultado = (pow($x,2) + pow($y,2))/($x + $y);
return $resultado;
}

$x = 10;
$y = 5;

echo "valor de x é : $x <br> ";
echo "valor de y é : $x <br> ";

echo "Resultado :" .calcularFormula($x,$y);

?>