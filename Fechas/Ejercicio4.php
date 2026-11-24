<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>

    <form method="POST">
        Introduzca una fecha:
        <input type="date" name="fecha" required>
        <input type="submit" value="Enviar">
    </form>

    <?php

        $meses = [
            1 => "Enero",
            2 => "Febrero",
            3 => "Marzo",
            4 => "Abril",
            5 => "Mayo",
            6 => "Junio",
            7 => "Julio",
            8 => "Agosto",
            9 => "Septiembre",
            10 => "Octubre",
            11 => "Noviembre",
            12 => "Diciembre"
        ];

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $fecha = $_POST["fecha"];

            $dia = date("d", strtotime($fecha));
            $mes = date("m", strtotime($fecha));
            $año = date("y", strtotime($fecha));
        }

        echo $dia . " de " . $meses[$mes] . " de " . $anio;
    ?>

    
</body>
</html>