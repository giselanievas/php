<?php


//la constante como se define asi se queda, se muestrta sin el signo $

define('nombre', 'Gisela Nievas');
define('web', 'giselanievas');

echo nombre;
echo'<h1>'.web.'<h1>';

//esto es varibble


$web = "giselanievas/web";
$web = "giselabibiananievas/web";

echo'<h1>'.$web.'</h1>';

//constantes PREDEFINIDAS


echo PHP_VERSION;
echo __FILE__;
echo PHP_OS;


?>