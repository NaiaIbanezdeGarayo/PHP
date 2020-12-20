<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "datos.php";
require "funcionSesiones.php";

session_start();
if (!isset($_SESSION["usuario"])){
    require_once "views/login.view.php";
    if (isset($_POST["usuario"]) && isset($_POST["contrasena"])){
        $login = comprobarLogin($_POST["usuario"],$_POST["contrasena"] , $usuarios);
        if ($login){
            $_SESSION["usuario"] = $_POST["usuario"];

            inicializarArrayPacientes();

            header ("Location: index.php");

        }else{
            echo "Usuario y contraseña incorrecto";
            require_once "views/login.view.php";
        }

    }
}
else{

    require_once "views/pacientes.view.php";

    //Si ya se ha logueado
    if (isset($_GET["accion"])){
        $accion = $_GET["accion"];
        switch ($accion){
            case "nuevo":
                anadirPaciente($_POST["codPaciente"], $_POST["nomPaciente"], $_POST["apePaciente"]);
                require_once "views/pacientes.view.php";
                break;
            case "marcarAtendido":
                marcarAtendido($_GET["codPaciente"]);
                break;
            case "borrarTodos":
                borrarTodos();
                header("Location: index.php");
                require_once "views/pacientes.view.php";
                break;
            case "cerrarSesion":
                cerrarSesion();
                break;
        }


    }


}


