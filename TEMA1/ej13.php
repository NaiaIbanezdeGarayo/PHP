<?php
 $animales = ["perro", "gato", "loro", "conejo"];
 $colores = ["rosa", "blanco", "amarillo", "verde"];

 //Calcula el número de elementos de cada array
    echo count($animales);
    echo count($colores);

 //Añade un elemento al final del array $animales utilizando una función
    array_push($animales, "cerdo");

 //Añade un elemento al principio del array $colores utilizando una función
    array_unshift($colores, "azul");

 //Crea un tercer array que incluya los elementos de los dos arrays.
    $todos = array_merge($animales, $colores);

?>