<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once "funcionDB.php";
$dbh = connect();


session_start();
if (!isset($_SESSION["usuario"])){
    require_once "views/login.view.php";
    if (isset($_POST["usuario"]) && isset($_POST["contrasena"])){
        $login = comprobarLogin($dbh, $_POST["usuario"], $_POST["contrasena"]);
        if ($login){
            $_SESSION["usuario"] = $_POST["usuario"];
            $pacientes = getAll($dbh);
            header ("Location: index.php");
        }else{
            echo "Usuario y contraseña incorrecto";
            require_once "views/login.view.php";
        }
    }
}
else{
    $pacientes = getAll($dbh);
    require_once "views/pacientes.view.php";
    //Si ya se ha logueado
    if (isset($_GET["accion"])){
        $accion = $_GET["accion"];
        switch ($accion){
            case "nuevo":
                anadirPacientes($dbh,$_POST["codPaciente"], $_POST["nomPaciente"], $_POST["apePaciente"]);
                header("Location: index.php");
                break;
            case "marcarAtendido":
                marcarAtendido($dbh,$_GET["codPaciente"]);
                header("Location: index.php");
                break;
            case "borrarTodos":
                borrarTodos($dbh);
                header("Location: index.php");
                require_once "views/pacientes.view.php";
                break;
            case "cerrarSesion":
                cerrarSesion();
                break;
        }
    }

}


