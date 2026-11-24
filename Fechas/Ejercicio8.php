<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>

     <form method="POST">

        <h3>Primera persona</h3>

        Nombre:
        <input type="text" name="nombre1" required>

        Fecha de nacimiento:
        <input type="date" name="fecha1" required>

        <h3>Segunda persona</h3>

        Nombre:
        <input type="text" name="nombre2" required>

        Fecha de nacimiento:
        <input type="date" name="fecha2" required>

        <input type="submit" value="Comparar">

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nombre1 = $_POST["nombre1"];
        $nombre2 = $_POST["nombre2"];

        $fecha1 = strtotime($_POST["fecha1"]);
        $fecha2 = strtotime($_POST["fecha2"]);

        $hoy = time();

        if ($fecha1 <= $hoy && $fecha2 <= $hoy) {

            $edad1 = floor(($hoy - $fecha1) / (60 * 60 * 24 * 365));
            $edad2 = floor(($hoy - $fecha2) / (60 * 60 * 24 * 365));

            echo $nombre1 . " tiene " . $edad1 . " años.<br>";
            echo $nombre2 . " tiene " . $edad2 . " años.<br>";

            if ($fecha1 < $fecha2) {

                echo $nombre1 . " es la persona mayor.";

            } elseif ($fecha2 < $fecha1) {

                echo $nombre2 . " es la persona mayor.";

            } else {

                echo "Las dos personas tienen la misma fecha de nacimiento.";

            }

        } else {

            echo "Las fechas de nacimiento no pueden ser futuras.";

        }

    }

    ?>
    
</body>
</html>