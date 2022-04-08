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

echo date('d-m-y');
echo '<br/>';
echo time();

//matematica
echo '<br/>';
echo "Raiz cuadra de 10:".sqrt(10);
echo '<br/>';
echo "Numero aleatorio entre 10 y 40:".rand(10,40);

echo '<br/>';
echo "Numero pi:".pi();

echo '<br/>';
echo "Redondeo: ".round(7.8998234, 1);




//mas funciones generales

echo '<br/>';

echo gettype($horario);
if(!is_string($horario)){
    echo "La variable no es un string ";
}
else {
    echo "la variable es un string";
}


//CON LA FUNCION ISSET PODEMOS AVERIGUAR SI UNA VARIABLE EXISTE DENTRO DE NUESTRO PROGRAMA, SI EXISTE DEVUELVE EL TRUE, SINO EL FALSE


if(isset($edad)){
    echo "la variable edad existe";
}
else{
    echo "la variable edad no existe";
}
echo '<br/>';


$frase = "         mi     contenido     ";
echo $frase;
echo '<br/>';



// elimina los espacios por delante y por detras

var_dump(trim($frase));
echo '<br/>';

$year = 2019;

// unset elimina la variable 
unset($year);
var_dump($year);
echo '<br/>';

$texto="    ";


//si no pongo el trim toma los espacios como caracteres
if(empty(trim($texto))){
    echo"la variable esta vacia";
}
else{
    echo"la variable tiene contenido";
}


//contar cadenas de un string

echo '<br/>';
$cadena="123456    ";
echo strlen($cadena);
echo '<br/>';



//encontrar caracter
//si no existe me pone false//me dice en que posicion sale



$frase ="La vida es bella";
echo strpos($frase, "i3626");


//reemplazar palabras de un string
$frase = str_replace("vida", "moto", $frase);
echo $frase;


//CONVERTIR A MAYUSCULAS Y MINUSCULAS
echo '<br/>';
echo strtolower($frase);
echo '<br/>';
echo strtoupper($frase);

?>