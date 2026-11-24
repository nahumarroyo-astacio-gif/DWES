<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>

    <form method="POST">

        Años:
        <input type="number" name="anios" min="0" required>

        Meses:
        <input type="number" name="meses" min="0" required>

        Días:
        <input type="number" name="dias" min="0" required>

        <input type="submit" value="Calcular">

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $anios = $_POST["anios"];
        $meses = $_POST["meses"];
        $dias = $_POST["dias"];

        $fecha = strtotime("+$anios years +$meses months +$dias days");

        $numeroDia = date("N", $fecha);

        $diasSemana = [
            1 => "Lunes",
            2 => "Martes",
            3 => "Miércoles",
            4 => "Jueves",
            5 => "Viernes",
            6 => "Sábado",
            7 => "Domingo"
        ];

        echo "La fecha será: " . date("d/m/Y", $fecha) . "<br>";
        echo "El día de la semana será: " . $diasSemana[$numeroDia];

    }

    ?>

    
</body>
</html>