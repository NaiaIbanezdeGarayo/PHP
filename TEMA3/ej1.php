<?php

if(isset($_GET["user"]))
    setcookie("usuario", $_GET["user"], time() + 7*24*60*60);
//Comprobamos si han introducido algo

if (isset($_GET["usuario"]))
    $usuario = $_COOKIE["usuario"];


require "ej1.view.php";