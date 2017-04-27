<?php

/*
Funciones utilizadas en este ejercicio:
- floor() : http://php.net/manual/es/function.floor.php
- min() : http://php.net/manual/es/function.min.php
*/

function solve($n, $p){
    /*
    1- Dividiremos $p / 2 y lo
    redondearemos al entero próximo inferior
    utilizando la función de php floor().

    Esto nos permitira conocer el número de
    paginas que hemos pasado desde el inicio del libro.
    */
    $start = floor($p / 2);
     /*
     2- Realizaremos la sustracción de $p a $n
     y dividiremos el resultado entre 2, de nuevo
     haremos uso de la función floor() para obtener
     el entrero próximo inferior.

     Esto nos permitira conocer el número de
     paginas que hemos pasado desde el final del libro.
     */
     $end = floor(($n - $p) / 2);

     /*
     Para obtener el resultado optimo (menor esfuerzo), tal y
     como se explico en el planteamiento del problema, utilizaremos
     la función min();
     */
     return min($start, $end);
}

echo solve(6, 5);
