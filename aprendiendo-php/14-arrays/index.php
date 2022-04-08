<?php
/* $pelicula = "Batman"; */
$peliculas = array('batman', 'superman', 'el sr de los anillos');
$cantantes = ['maria', 'juana', 'candela'];


//array asociativo


$personas = array(
    array(
        'nombre' => 'Gisela',
        'apellidos' => 'Nievas',
        'web' => 'www.giselanievas.com'
    ),

    array(
        'nombre' => 'Luis',
        'apellidos' => 'Perez',
        'web' => 'www.luisperez.com'
    ),

    array(
        'nombre' => 'Joaquin',
        'apellidos' => 'Pratolongo',
        'web' => 'www.joaquinpratolongo.com'
    ),


);

foreach($personas as $persona){
    var_dump($persona['nombre']);
}
var_dump($_GET);

/* var_dump($cantantes);
var_dump($peliculas[2]); */




//recorrer con FOR


echo "<h1>Listado de peliculas</h1>";
echo "<ul>";
for ($i = 0; $i < count($peliculas); $i++) {
    echo "<li>" . $peliculas[$i] . "</li>";
}

echo "</ul>";
echo "<h1>Listado de peliculas con foreach</h1>";
echo "<ul>";



//recorreme todo el array de cantante y en cada iteracion me creas una varible con el contenido
foreach ($peliculas as $pelicula) {
    echo "<li>" . $pelicula . "</li>";
}

echo "</ul>";
