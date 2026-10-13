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

  for($i = 0; $i < 12; $i++){
    $numero[$i] = rand(1, 20);
  }

  echo"<table border = '1'>";
  echo"<tr>
            <th>Número</th>
            <th>Cuadrado</th>
            <th>Cubo</th>
       </tr>";

    foreach($numero as $numero){
        echo"<tr>";
        echo"<td>" . $numero . "</td>";
        echo"<td>" . ($numero ** 2) . "</td>";
        echo"<td>" . ($numero ** 3) . "</td>";
        echo"</tr>";
    }

    echo"</table>";
    
?>
</body>
</html>