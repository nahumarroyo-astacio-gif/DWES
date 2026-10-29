<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

    <?php 
    $numero = array();
    $cuadrado = array();
    $cubo = array();

    for($i = 0; $i < 20; $i++){
        $numero[$i] = rand(0, 100);

        $cuadrado[$i] = $numero[$i] * $numero[$i];

        $cubo[$i] = $numero[$i] * $numero[$i] * $numero[$i];

    }

    echo "<h1>Arrays aleatorios de 20 numeros</h1>";

    echo "<table border='1'>";

    echo"<tr>";
    echo"<th>Número: </th>";
    echo"<th>Cuadrado: </th>";
    echo"<th>Cubo: </th>";
    echo"</tr>";

    for($i = 0; $i<20; $i++){

    echo"<tr>";
    echo"<th>" . $numero[$i] . "</th>";
    echo"<th>" . $cuadrado[$i] . "</th>";
    echo"<th>" . $cubo[$i] . "</th>";
    echo"</tr>";

    }

    
    echo"</table>";

?>

    
</body>
</html>