<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>

    <h1>Colores seleccionados</h1>

    <form action="" method="post">

        <input type="checkbox" name="colores[]" value="Rojo">
        <label>Rojo</label>
        <br>

        <input type="checkbox" name="colores[]" value="Azul">
        <label>Azul</label>
        <br>

        <input type="checkbox" name="colores[]" value="Verde">
        <label>Verde</label>
        <br>

        <input type="checkbox" name="colores[]" value="Amarillo">
        <label>Amarillo</label>
        <br>

        <input type="checkbox" name="colores[]" value="Negro">
        <label>Negro</label>
        <br><br>

        <input type="submit" value="Enviar">

    </form>

    <?php

    if (isset($_POST["colores"]) && count($_POST["colores"]) > 0) {

        echo "<h2>Colores elegidos</h2>";
        echo "<ul>";

        foreach ($_POST["colores"] as $color) {
            echo "<li>" . htmlspecialchars($color) . "</li>";
        }

        echo "</ul>";

    } elseif (isset($_POST["enviar"]) || $_SERVER["REQUEST_METHOD"] == "POST") {

        echo "<p>No has seleccionado ningún color.</p>";

    }

    ?>
    
</body>
</html>