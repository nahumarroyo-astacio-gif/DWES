<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>

    <form method="POST">
        Selecciona una fecha:
        <input type="date" name="fecha" required>
        <input type="submit" value="Enviar">
    </form>

    <?php
        
    
     if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $fecha = $_POST["fecha"];

        $dia = date("N", strtotime($fecha));

        switch ($dia) {

            case 1:
                echo "El día de la semana es Lunes";
                break;

            case 2:
                echo "El día de la semana es Martes";
                break;

            case 3:
                echo "El día de la semana es Miércoles";
                break;

            case 4:
                echo "El día de la semana es Jueves";
                break;

            case 5:
                echo "El día de la semana es Viernes";
                break;

            case 6:
                echo "El día de la semana es Sábado";
                break;

            case 7:
                echo "El día de la semana es Domingo";
                break;

        }

    }

    ?>
    
</body>
</html>