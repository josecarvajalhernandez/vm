<?php
function conexion()
{    
    $server   = ''; //servidor
    $username = ''; //usuario de la base de datos
    $password = ''; //password del usuario de la base de datos
    $database = ''; //nombre de la base de datos

    $link = mysqli_connect($server, $username, $password, $database);
    mysqli_set_charset($link,'utf8');

    return($link);
    mysqli_close($link);
}