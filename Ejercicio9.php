<?php

$radio = readline ("Introduce el radio para el volumen: ");
$altura = readline ("Introduce la altura para el volumen: ");

$volumen = (3.14159* $radio * $radio * $altura)/3;

echo "El volumen del cono es:" . $volumen . "cm^3";

?>
