<?php
    $user= $_GET["user"];
    $pass = $_GET["pass"];
    $usuarios = [
        "user1" => [
            "nombre" => "Nora",
            "password" => "123123",
            "email" => "nora@php.net"
        ]
    ];
    function comprobacion($user,$pass, $usuarios,$username){
        if ($user === $usuarios[$username]["nombre"] && $pass === $usuarios[$username]["password"]){
            echo "El usuario existe";
        }else
            echo "El usuario no existe";

    }

    echo comprobacion($user,$pass,$usuarios,"user1");
?>