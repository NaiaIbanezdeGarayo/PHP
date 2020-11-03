<?php
    $paises = ["Brasil", "Portugal","Islandia","Mexico","Filipinas","Marruecos"];
    $pais_introducido = $_GET["pais"];

    function recorrerArray($paises,$pais_introducido){
    $posicion = 0;
        for ($x = 0; $x < count($paises); $x ++){
            if ($pais_introducido === $paises[$x]) {
                $posicion = $x;
                break;
            }
        }
        /*return $posicion;*/
        if ($posicion == count($paises)){
            return "-1";
        }else{
            return $posicion;
        }
    }
    echo recorrerArray($paises,$pais_introducido);