<?php
    $n1 = $_GET["numero1"];
    $n2 = $_GET["numero2"];

    function operacion($n1, $n2){
        if ($n1 !== $n2){
            $suma = $n1 + $n2;
            return $suma;
        }else{
            $mult = $n1 * $n2;
            return $mult;
        }
    }
    echo operacion($n1,$n2);
?>