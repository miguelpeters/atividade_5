<?php

function converterTemperatura($celsius, &$fahrenheit, &$kelvin){

$fahrenheit = ($celsius*1.8)+32;
$kelvin = $celsius + 273.15;
}
$celsius = 25;
converterTemperatura($celsius, $fahrenheit, $kelvin);
echo "Temperatura em celsius: $celsius <br>";
echo "Temperatura em fahrenheit: $fahrenheit <br>";
echo "Temperatura em kelvin: $kelvin";


?>