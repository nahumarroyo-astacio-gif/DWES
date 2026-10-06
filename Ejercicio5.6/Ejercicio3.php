<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
<?php

$nuemero = array();

for($i = 0; $i<15; $i++){
$numero["$i"] = readline("Añade un número: ");
}

$ultimo = $numero[14];

for($i = 14; $i > 0; $i--){
    $numero[$i] =$numero[$i - 1];
}

$numero[0] = $ultimo;

echo"<h1>Array rotado</h1>";

for($i = 0; $i<15; $i++){
    echo $numero[$i] . " ";
}




    
?>    
</body>
</html>