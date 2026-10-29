<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>

<h1>Productos y precios</h1>

    <?php

    $productos = array(
        "Pan" => 1.20,
        "Leche" => 1.50,
        "Arroz" => 2.30,
        "Huevos" => 3.00,
        "Aceite" => 5.50
    );

    $suma = 0;
    $productoCaro = "";
    $precioCaro = 0;

    echo "<table border='1'>";
    echo "<tr><th>Producto</th><th>Precio</th></tr>";

    foreach ($productos as $producto => $precio) {

        echo "<tr>";
        echo "<td>" . $producto . "</td>";
        echo "<td>" . number_format($precio, 2, ',', '') . " €</td>";
        echo "</tr>";

        $suma += $precio;

        if ($precio > $precioCaro) {
            $precioCaro = $precio;
            $productoCaro = $producto;
        }
    }

    echo "</table>";

    $media = $suma / count($productos);

    echo "<p>Precio medio: " . number_format($media, 2, ',', '') . " €</p>";

    echo "<p>Producto más caro: " . $productoCaro .
         " (" . number_format($precioCaro, 2, ',', '') . " €)</p>";

    ?>
    
    
</body>
</html>