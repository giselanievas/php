<?php


$resultado = 0;

for ($i=0; $i <= 100; $i++) { 
   $resultado = $resultado + $i;  
   echo "<h1>El resultado es: $resultado</h1>";
}

$numero = 1;

for($contador=1;$contador<=10;$contador++){


    if($numero==1){
        echo "no se pueden mostrar estas operaciones prohibidas";
        break;
    }

    echo"$numero x $contador = ".($numero*$contador)."<br/>";

}



?>