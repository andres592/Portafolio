<?php

require "app.php";

function incluirTemplate( string $nombre, bool $inicio_enlace=false, $diseno_enlace = false, $contacto = false, $dw_enlace = false){
    include TEMPLATES_URL."/$nombre.php";
}