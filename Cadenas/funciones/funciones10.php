<?php

function nombreCompleto ($nombre){

$nombreMayus = ucwords(strtolower($nombre));

$palabras = explode(" ", $nombreMayus);

$iniciales = "";

foreach ($palabras as $palabra) {
    $inicial = substr($palabra, 0, 1);
    $iniciales .= $inicial;
}

return $nombreMAyus . "<br>" . $iniciales;

}
    
?>