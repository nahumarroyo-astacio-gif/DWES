<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>

<?php

    $numero = array();

    for($i=0; $i<10; $i++){

        $numero = readline("Añade un numero: ");

    }

    $maximo = max($numero);
    $minimo = min($numero);

    echo"<h1>Números introducidos</h1>";

    for($i=0; $i<10; $i++){
        echo $numero[$i];

        if($numero[$i] == $maximo){
            echo" máximo";
        }

        if($numero[$i] == $minimo){
            echo " minimo";
        }

        echo"<br>";

    }

    

?>
</body>
</html>
