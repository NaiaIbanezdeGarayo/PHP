<?php
    $n = $_GET["numero"];

    function suma($n){
        $s=0;
        for ($x = 0; $x <= $n; $x++){
            if ($x%2==0 ){
                $s +=  $x;
            }
        }
        return $s;
    }
    echo suma($n);