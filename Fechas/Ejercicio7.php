<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>

    <form method="POST">

        Fecha de nacimiento:
        <input type="date" name="nacimiento" required>

        Fecha futura:
        <input type="date" name="futura" required>

        <input type="submit" value="Calcular edad">

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nacimiento = strtotime($_POST["nacimiento"]);
        $futura = strtotime($_POST["futura"]);

        if ($futura >= $nacimiento) {

            $segundos = $futura - $nacimiento;

            $edad = floor($segundos / (60 * 60 * 24 * 365));

            echo "La edad será de " . $edad . " años.";

        } else {

            echo "La fecha futura no puede ser anterior al nacimiento.";

        }

    }

    ?>
    
</body>
</html>