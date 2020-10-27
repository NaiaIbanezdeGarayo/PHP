<?php
    $n = $_GET["numero"];

    function suma($n){
        $s=0;
        for ($x = 0; $x <= $n; $x++){
            $s +=  $x;
        }
        return $s;
    }
    echo suma($n);


/*function sumar($numero)
{
    $resultado = 0;
    for ($i = 0; $i <= $numero; $i++) {
        $resultado += $i;
    }
    return $resultado;
}*/