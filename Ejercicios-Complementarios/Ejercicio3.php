<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
<?php
    $numero = array();

    for($i = 0; $i < 20; $i++){
        $numero[$i] = rand(0, 50);
    }

    $pares = 0;
    $impares = 0;

    echo"<h2>Números generados</h2>";
    foreach($numero as $numero){
        echo $numero . " ";

        if($numero % 2 == 0){
            $pares++;
        }else{
            $impares++
        }
    }

    echo "<p>Cantidad de números pares: " . $pares . "</p>";
    echo "<p>Cantidad de números impares: " . $impares . "</p>";
    
?>
</body>
</html>