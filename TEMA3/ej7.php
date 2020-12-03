<?php
/**
 * Created by PhpStorm.
 * User: Naia
 * Date: 03/12/2020
 * Time: 19:13
 */
//1. Llamo a nuestra BD o arrays
include "ej7datos.php";
//2. Inicio sesión
session_start();
//3. Miro si hay una sesión iniciada
inicializarSesion();
//4.Mostra que sesión esta iniciada
var_dump($_SESSION["productosLista"]);
//5.Accion realizada por el usuario
if (isset($_GET["accion"])){
    $accion = $_GET["accion"];
    realizarAccion($accion);
}
//6.Preparamos datos para la vista
if (isset($_SESSION["productosLista"])){
    //Los productos que hemos dado a comprar se guardaran en la sesion productosLista y guardaremos esos objetos como productosComprados
    $productosComprados = $_SESSION["productosLista"];
    $precioTotal = calcularPrecioTotal($productosComprados,$productos);
}
//7.Cargamos vista
require "ej7.view.php";



function inicializarSesion(){
    if (!isset($_SESSION["productosLista"])){
        $_SESSION["productosLista"] = array();
    }
}

function realizarAccion($accion){
    switch ($accion){
        case "insertaEnCesta":
            //Si en el GET a añadido el idproducto
            if (isset($_GET["idproducto"])){
                //Metemos con el $_GET["idproducto"] a una variable que se llama $idproducto
                $idproductoComprado = $_GET["idproducto"];
                //Añadimos en el array de la sesion productosLista el idproducto seleccionado
                array_push($_SESSION["productosLista"],$idproductoComprado);
            }
            break;
        case "comprar":
            //Borramos la lista de productos que hay en la cesta, es decir, vaciamos el array que hay dentro de esa sesión
            unset($_SESSION["productosLista"]);
            break;
    }
}

function calcularPrecioTotal($productosComprados, $productos){
    //Inicializamos primero la variable precio total
    $precioTotal = 0;
    //Recorremos el array de productos comprados
    foreach ($productosComprados as $idproducto){
        //Hacemos que dentro de la variable preciototal se añada el precio del producto con el id que hemos cogido
        $precioTotal += $productos[$idproducto]['precio'];
    }
    //Devolvemos el precioTotal
    return $precioTotal;
}