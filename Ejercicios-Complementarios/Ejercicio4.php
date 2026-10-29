<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
<?php

$compra = array("Leche", "Pan", "Huevos", "Arroz", "Manzanas");

$compra[] = "Pasta";

echo"<h2>Lista de la compra</h2>";
echo"<ul>";

    foreach($compra as $producto){
        echo"<li>" . $producto . "</li>";
    }

    echo"</ul>";
    
?>
</body>
</html>