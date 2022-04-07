<?php

/* function muestraNombres(){
    echo "Gisela Nievas <br/>";
    echo "Sebastián Nievas <br/>";
    echo "Josefina Nievas <br/>";
    echo "Catalina Nievas <br/>";
    echo "José Nievas <br/>";
}
muestraNombres();
muestraNombres();
muestraNombres();
muestraNombres();
muestraNombres();
muestraNombres();
muestraNombres();


function tabla($numero){
    echo "<h3>Tabla de multilplicar del numero: $numero</h3>";


    for($i=1; $i<= 10; $i++){
        $operacion = $numero*$i;
        echo "$numero x $i = $operacion <br/>";
    }


}



if (isset($_GET['numero'])){
    tabla($_GET['numero']);
}else{
    echo "no hay numero para multiplicar";
}



for ($i=0; $i <=10 ; $i++) { 
        tabla($i);
}

function calculadora($numero1, $numero2, $negrita = false){
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    if($negrita){
        echo "<h1>";
    }

    echo "suma: $suma </br>";
    echo "Resta: $resta </br>";
    echo "Multiplicacion: $multi </br>";
    echo "División: $division </br>";



}


calculadora(10,20);
calculadora(40,20);
calculadora(50,20);
calculadora(60,20, true);
calculadora(70,20);
calculadora(80,20);
calculadora(90,20); */

function getNombre ($nombre){
    $texto = "El nombre es: $nombre ";
    return $texto;
}

function getApellido ($apellidos){
    $texto = "El apellidos es: $apellidos ";
    return $texto;
}

echo getNombre("Gisela");
echo getApellido("Nievas");



/* 
function devuelveElNombre($nombre, $apellidos){
    $texto = "El nombre es $nombre"
    ."<br/>".
    "Los apellidos son: $apellidos";
    return $texto;
    
    ;
}
echo devuelveElNombre("Gisela", "Nievas"); */

?>