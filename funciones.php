<?php 

function saludo($nombre){
    return "hola mi nombre es: $nombre";
}
echo saludo ("nicole");
echo "<br>";

$usuario="ashley";
echo saludo ("$usuario");