<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>

<form method="POST">
<input type="number" name="primo" required>
<input type="submit" value="Comprobar">

<?php
function esPrimo ($numero){

    $primo = 0;

    for ($i=2; $i < $numero; $i++) { 

        if($numero % $i == 0){
            return false;
        }
    }

    return true;
}

function siguientePrimo ($numero){
    
    $numero++;

    while (!esPrimo($numero)) {
        $numero++;
    }

    return $numero;

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["primo"];

    echo "El siguiente numero primo es: " . siguientePrimo($numero);
}

?>
    
</body>
</html>