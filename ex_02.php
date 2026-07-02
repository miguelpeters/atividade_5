<?php

 function inverterTexto($texto){


    $invertido = (strrev($texto));
    return $invertido;
 }
    
    $texto = "banana";
    echo "o palavra é : $texto <br> ";
    
    echo "Resultado : " .inverterTexto($texto);

?>