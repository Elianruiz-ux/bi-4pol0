<?php


//$mysqli = new mysqli('aca va el servidor', 'aca va el usuario', 'aca va la contraseña', 'aca va el nombre de la bd');
    $mysqli = new mysqli('localhost', 'root', '', 'bi_4pol0');
    

    if($mysqli->connect_error){
        die('Error al conectar la bd'. $mysqli->connect_error);
    }
