<?php 


function conectarDB() : mysqli{
    $db = mysqli_connect("localhost","root","","contacto");

    if(!$db){
        echo "No se pudo conectar";
        exit;
    }
    return $db;
}


?>