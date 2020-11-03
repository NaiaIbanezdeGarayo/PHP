<?php
$agenda = [
    [
        "nombre" => "Amaia",
        "apellidos" => "Gorbea Jainaga",
        "telefono" => "945111111",
        "email" => "agorbea@php.net"
    ],
    [
        "nombre" => "Pepe",
        "apellidos" => "Gorbea Jainaga",
        "telefono" => "945111111",
        "email" => "agorbea@php.net"
    ]
];

function generarTabla($nombre,$apellidos, $telefono,$email){
    return "<tr><td>".$nombre."</td><td>".$apellidos."</td><td>".$telefono."</td><td>".$email."</td></tr>";

}
function tabla($agenda){
    $tabla = "<table border='1'>";

    for ($x = 0; $x < count($agenda); $x ++){
        $tabla .= generarTabla(
            $agenda[$x]["nombre"],
            $agenda[$x]["apellidos"],
            $agenda[$x]["telefono"],
            $agenda[$x]["email"]
        );
    }
    return $tabla."</table>";
}
require "ej24.view.php";