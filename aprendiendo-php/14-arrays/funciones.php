<?php

$cantantes = ['hola', 'quetal', 'como estas', 'joaco'];
$numeros = [1,2,3,4,5,6,7,8];


/* 
arsort($numeros);
var_dump($numeros);
 */


//AÑADIR ELEMENTOS AL ARRAY
/* $cantantes[]='Natos';
$cantantes[]='Natos';
$cantantes[]='Natos';
$cantantes[]='Natos';
$cantantes[]='Natos';
$cantantes[]='Natos'; */

/* //AGREGAR ELEMENTO AL ARRAY
array_push($cantantes, "jgjgjgjgjg");
*/

//QUITAR ELEMENTO DEL ARRAY
array_pop($cantantes);

//eliminar elementos array
unset($cantantes[2]);


//aleatorio
$indice= array_rand($cantantes);

echo $cantantes[$indice]; 


//dar la vuelta

var_dump (array_reverse($numeros));
$resultado = array_search('como', $cantantes);
var_dump($resultado);


//contar numero de elementos
echo "</br>";
echo sizeof($numeros);





?>