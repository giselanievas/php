<?php

$color = "AZUL";

if ($color=="ROJO") {
    echo "EL COLOR ES ROJO";
} else {
    echo "EL COLOR NO ES ROJO";
}


echo "<br>";

/*OPERADORES DE COMPARACION
== IGUAL
=== IDENTICOS
!= DIFERENTES
<> DIFERENTE
< MENOR QUE
> MAYOR QUE
<= MENOR O IGUAL
>= MAYOR O IGUAL
&& AND
 || or
! NO

*/


$year = 2018;
$nombre="juan";
if ($year != 2019) {
    echo "<h1>$year es un año diferente a 2019</h1>";
    echo "<h2>y es de la ciudad $nombre </h2>";
} else {
    echo "es 2019";
}



//ELSEIF

$dia = 3;
if($dia == 1 ){
    echo "Es lunes";
}elseif($dia ==2){
    echo"MARTES";
}
elseif($dia ==3){
    echo"MIERCOLES";
}
elseif($dia ==4){
    echo"JUEVES";
}
goto marca;

$mes= 1;
switch ($mes){
    case 1:
        echo "ENERO";
        break;
    case 2:
        echo "FEBRERO";
        break;
    case 3:
        echo "MARZO";
        break;
    case 4:
        echo "ABRIL";
        break;
        
}

marca:
echo "me he salatado el swich"























?>