<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

	$altura= $_POST["altura"];
	$diametro= $_POST["diametro"];

	$radio = $diametro / 2;

	$volumen = 3.14159 *$radio *$radio *$altura
}
?>



