<?php
    $diccionario = array(
        "Usuario1"  => array(
            "Nombre" => "nombre1",
            "Apellido" => "apellido1",
            "Email" => "email1"
        ),
        "Usuario2" => array(
            "Nombre" => "nombre2",
            "Apellido" => "apellido2",
            "Email" => "email2"
        )
    );

    function getDatos($diccionario, $username){
        return $diccionario[$username]["Email"];
    }

    echo getDatos($diccionario,"Usuario1");
?>