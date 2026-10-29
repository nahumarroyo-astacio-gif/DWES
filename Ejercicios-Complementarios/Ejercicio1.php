<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

<?php

    $temperatura = array();



    for($i = 0; $i<7; $i++){
        $temperatura[$i] = rand(0, 40);
    }

    $suma = 0;

    echo"<table border = '1'>";
    echo"<tr>
        <th>Día</th>
        <th>Temperatura</th>
        </tr>"

        foreach($temperatura as $indice => $valor){
            echo"<tr>"
            echo"<td>" . ($indice + 1) . "</td>";
            echo"<td>" . $valor . "</td>";
            echo"</tr>";

            $suma += $valor;
        }
    echo"</table>";

    $media = $suma / count($temperatura);

    echo"<p>Temperatura media semanal: " . round($media, 2) . " grados<p>";

?>    
</body>
</html>