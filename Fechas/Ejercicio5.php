<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>

    <form method="POST">
        <label>Selecciona un dia: </label>
        <select name="dia">
            <option value="1">Lunes</option>
            <option value="2">Martes</option>
            <option value="3">Miércoles</option>
            <option value="4">Jueves</option>
            <option value="5">Viernes</option>
            <option value="6">Sábado</option>
            <option value="7">Domingo</option>
        </select>

        <input type="submit" value="Enviar">

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $diaElegido = $_POST["dia"];

        $hoy = date("N");

        $diferencia = ($diaElegido - $hoy + 7) % 7;

        if ($diferencia == 0) {
            $diferencia = 7;
        }

        $fecha = strtotime("+$diferencia days");

        echo "El próximo día elegido será el " . date("d/m/Y", $fecha);

    }

    ?>

    
    
</body>
</html>