<?php

function connect(){
    $dbname = "pacientes";
    $host = "localhost";
    $user = "root";
    $pass = "";

    try{

        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $dbh;
    }catch(PDOException $e){
        echo $e->getMessage();
        return null;
    }
}

function getAll($dbh){
    $stmt = $dbh-> prepare("SELECT * FROM pacientes");
    $stmt -> setFetchMode(PDO::FETCH_OBJ);
    $stmt -> execute();
    return $stmt -> fetchAll();
}


function comprobarLogin($dbh, $usuario, $contrasena){
    $usuario = getUser($dbh, $usuario);
    if ($usuario != null){
        if ($usuario->contrasena == $contrasena){
            return true;
        }
    }
    return false;
}

function getUser($dbh, $usuario){
    $data = array(
        "usuario" => $usuario
    );
    $stmt = $dbh -> prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
    $stmt-> setFetchMode(PDO::FETCH_OBJ);
    $stmt -> execute($data);
    return $stmt -> fetchObject();
}

function anadirPacientes($dbh, $codPaciente, $nomPaciente, $apePaciente){
    $data = array(
        "codigo" => $codPaciente,
        "nombre" => $nomPaciente,
        "apellido" => $apePaciente,
        "atendido" => 0
    );
    $stmt = $dbh -> prepare("INSERT INTO pacientes (codigo, nombre, apellidos, atendido) VALUES (:codigo, :nombre, :apellido, :atendido)");
    $stmt -> execute($data);

}

function marcarAtendido($dbh,$codPaciente){
    $data = array(
        "codigo" => $codPaciente
    );
    $stmt = $dbh -> prepare("UPDATE pacientes SET atendido = 1 WHERE codigo = :codigo");
    $stmt -> execute($data);
}

function borrarTodos($dbh){
    $stmt = $dbh -> prepare("DELETE FROM pacientes");
    $stmt -> execute();

}
function close(){
    $dbh = null;
}

function cerrarSesion(){
    unset($_SESSION["usuario"]);
    header("Location: index.php");
}

