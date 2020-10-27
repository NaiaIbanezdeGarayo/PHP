<?php
$n = $_GET["numero"];

function suma($n){
    $s=0;
    for ($x = 0; $x <= $n; $x++){
        if ($x%2 == 0){
            if ($s < 100){
                $s +=  $x;
            }else
                return $s;
        }
    }
    return $s;
}
echo suma($n);