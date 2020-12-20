<?php
function comprobarLogin($contrasena,$usuario, $usuarios){
    if (array_key_exists( $usuario,$usuarios)){
        if ($usuarios[$usuario]["contrasena"] == $contrasena){
            return true;
        }
    }
}

function anadirPaciente($codPaciente, $nomPaciente, $apePaciente){
    array_push($_SESSION["pacientes"] , array(
        "codPaciente" => $codPaciente,
        "nomPaciente" => $nomPaciente,
        "apePaciente" => $apePaciente,
        "atendido" => 0
    ));
    header("Location: index.php");
}

function inicializarArrayPacientes(){
    if (!isset($_SESSION["pacientes"])){
        $_SESSION["pacientes"] = array();
    }

}


function borrarTodos(){
    $_SESSION["pacientes"] = array();
}

function cerrarSesion(){
    unset($_SESSION["usuario"]);
    header("Location: index.php");
}
function marcarAtendido($codPaciente){
    $index = 0;
    foreach ($_SESSION["pacientes"] as $paciente){
        if ($paciente["codPaciente"] == $codPaciente){
            $_SESSION["pacientes"][$index]["atendido"] = 1;

            header("Location: index.php");
        }
        $index ++;
    }
}