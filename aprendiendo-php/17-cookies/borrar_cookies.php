<?php
if($_COOKIE['micookie']){
    unset($_cookie['micookie']);
    setcookie('micookie', '', time()-100);

}

//entra a la pagina ver cookies desde de borrar cookies, este seria un fichero de paso



header('location:ver_cookies.php');


