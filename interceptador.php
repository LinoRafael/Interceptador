<?php

//Requisição para puxar informação do sistema
$so_interface = $_SERVER['HTTP_USER_AGENT'];

//echo $so_interface;

$so = 'Windows';


//IF Buscando qual é o sistema operacional utilizado

if (strpos($so_interface, $so) !=false) {
    //echo 'Estou em um Windows'; 

    header("Location: http://localhost/INTERCEPTADOR/DESK_WEB/desk.php");

} 
else {
    //echo 'Não estou em um Windows';

    header("Location: http://localhost/INTERCEPTADOR/MOBILE_WEB/mobile.php");

}





?>