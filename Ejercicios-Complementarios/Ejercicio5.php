<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
<?php
$nombre = array("Ana", "Luis", "Marta", "Pedro", "Lucia");

echo"<table border='1'>";
echo"<tr>
        <th>Índice</th>
        <th>Nombre</th>
    </tr>";

    foreach($nombre as $indice => $valor){
        echo"<tr>";
        echo"<td>" . $indice . "</td>";
        echo"<td>" . $valor . "</td>";
        echo"</tr>";
    }

    echo"</table>";
    
?>
</body>
</html>