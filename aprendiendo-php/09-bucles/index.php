
<?php

$numero =0;
while($numero <= 100){
    echo "<p>$numero</p>";
    $numero++;
}


// EJEMPLO


if(isset($_GET['numero'])){
    //cambiar tipo de dato
    $numero =(int) $_GET['numero'];
}else {
    $numero = 1;
}

echo"<h1>Tabla de multiplicar</h1>";

$contador = 0;
while($contador <= 10){
    echo "$numero x $contador =".($numero*$contador)."<br/>";
    $contador++;
}
echo "<hr/>";


$edad = 18;
$contador = 1;
do{
    echo "TIENES ACCESO AL LOCAL PRIVADO $contador";
    $contador++;
}while($edad>=18 && $contador<=10);

