<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>

    <form method="POST">

        Fecha del préstamo:
        <input type="date" name="fecha" required>

        <input type="submit" value="Devolver libro">

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $fechaPrestamo = new DateTime($_POST["fecha"]);
        $hoy = new DateTime("today");

        if ($fechaPrestamo > $hoy) {

            echo "La fecha del préstamo no puede ser futura.";

        } else {

            $dias = $fechaPrestamo->diff($hoy)->days;

            if ($dias <= 15) {

                echo "Devolución realizada con éxito";

            } else {

                $retraso = $dias - 15;

                $precio = $retraso * 2;

                echo "Has tardado " . $dias . " días en devolver el libro.<br>";
                echo "Días de retraso: " . $retraso . "<br>";
                echo "Debes abonar: " . $precio . " euros.";

            }

        }

    }

    ?>
    
</body>
</html>