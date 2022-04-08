<?php
//cookie es un fichero que almacena en el ordenador del usuario que visita la web, con el fin de recordar datos o rastrear el comportamiento del mismo en la web



//crear cookies

/* 

setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio); */



setcookie("micookie", "valor de mi galleta");

//cookie con expiracion, duarda ficheros en segundos 60 segundos * 60 minutos * 24 hs * 365 dias

setcookie("unyear", "valor de la cookie de 365 dias", time() + (60 * 60 * 24 * 365));


?>

<a href="ver_cookies.php">Ver las galletas</a>