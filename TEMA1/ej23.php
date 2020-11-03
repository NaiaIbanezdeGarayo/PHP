<?php

$persona = ["Ane","Markel","Nora","Dnael","Amaia","Izaro"];

function generarlista($persona){
    return "<li>".$persona."</li>";
}
function lista($persona){
    $lista = "<ul>";
    for ($x = 0; $x < count($persona); $x ++){
        $lista .= generarlista($persona[$x]);
    }
    return $lista."</ul>";
}
echo lista($persona);