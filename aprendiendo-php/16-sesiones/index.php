<?php
// sesion: almacena y persiste datos del usuario mientras que navega en un sitio web hasta que cierra sesion o cierra el navegador
//iniciar la sesion
session_start();
$variable_normal = "Soy una cadena de texto";



//esta sesion la puedo usar en cualquier pagina de mi dominio
$_SESSION['variable_persistente']= "Hola soy una variable persistente";


echo $variable_normal;
echo "</br>";
echo $_SESSION['variable_persistente'];




?>