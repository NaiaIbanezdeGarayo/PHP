<?php
    $ndia = $_GET("ndia");

    function semana($ndia){
        switch ($ndia){
            case 1 :
                echo "El día número 1 es lunes";
                break;
            case 2 :
                echo "El día número 2 es martes";
                break;
            case 3 :
                echo "El día número 3 es miércoles";
                break;
            case 4 :
                echo "El día número 4 es jueves";
                break;
            case 5 :
                echo "El día número 5 es viernes";
                break;
            case 6 :
                echo "El día número 6 es sábado";
                break;
            case 7 :
                echo "El día número 7 es domingo";
                break;
            default:
                echo "No es nigún dia de la semana";
        }
    }
    echo semana($ndia);

?>