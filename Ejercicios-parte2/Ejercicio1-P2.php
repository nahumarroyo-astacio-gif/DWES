<?php
	if(isset($_POST["calcular"])){
		$altura = $_POST["altura"];
		$radio = $_POST["radio"];

		$volumen = 3.14159 *$radio * $radio *$altura;

		echo "<div>";
		echo "El volumen del cilindro es: " . $volumen . " cm^3";
		echo "</div>";
	}

	

?>



