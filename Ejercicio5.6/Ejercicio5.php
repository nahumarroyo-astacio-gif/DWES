<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>

    <?php

    echo"<h1>Temperatura media del año</h1>";

    $meses = array(

        "Enero",
        "Febrero",
        "Marzo",
        "Abril",
        "Mayo",
        "Junio",
        "Julio",
        "Agosto",
        "Septiembre",
        "Octubre",
        "Noviembre",
        "Diciembre"
    );

    for($i = 0; $i<12; $i++){
       $temperatura = rand(0, 40); 

       echo $meses[$i] .": " . $temperatura . " Grados"; 
       echo"<br>";
    }

    


    ?>
</body>
</html>