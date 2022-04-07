<?php
$frase = "HOLA SOY UN FRASE";



function holaMundo(){

    global $frase;
    echo"<h1>$frase</h1>";

    $year = 2019;
    echo "<h1>$year</h1>";

    return $year;
}

holaMundo();



function buenosDias(){
    return "Hola buenos dias!!!!";

}
function buenasTardes(){
    return "Hola buenos tardes!!!!";

}
function buenasNoches(){
    return "Hola buenas Noches!!!!";

}

$horario = "Noches";

$mifuncion = "buenas".$horario;
echo $mifuncion();







?>