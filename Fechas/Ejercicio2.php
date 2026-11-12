
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>

    <form method="POST">

        Introduce una hora:

        <input type="number" name="hora" placeholder="Hora" required>
        <input type="number" name="minutos" placeholder="Minutos" required>
        <input type="number" name="segundos" placeholder="Segundos" required>

        <br>

        <label>Selecciona un formato:</label>

        <select name="formulario">
            <option value="1">HH:MM:SS</option>
            <option value="2">HH:MM</option>
            <option value="3">HH horas, MM minutos y SS segundos</option>
        </select>

        <input type="submit" value="Enviar">

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $hora = $_POST["hora"];
        $minutos = $_POST["minutos"];
        $segundos = $_POST["segundos"];
        $formato = $_POST["formulario"];

        if ($hora >= 0 && $hora <= 23 &&
            $minutos >= 0 && $minutos <= 59 &&
            $segundos >= 0 && $segundos <= 59) {

            switch ($formato) {

                case "1":
                    echo "Hora: " . $hora . ":" . $minutos . ":" . $segundos;
                    break;

                case "2":
                    echo "Hora: " . $hora . ":" . $minutos;
                    break;

                case "3":
                    echo "Hora: " . $hora . " horas, " .
                         $minutos . " minutos y " .
                         $segundos . " segundos";
                    break;

                default:
                    echo "Formato no válido";
                    break;
            }

        } else {

            echo "La hora introducida no es correcta";

        }

    }

    ?>

</body>
</html>
