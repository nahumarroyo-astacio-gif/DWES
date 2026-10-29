<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
 <h1>Notas de un alumno</h1>

    <form action="" method="post">

        <label>Nota 1:</label>
        <input type="number" name="notas[]" min="0" max="10" step="0.01" required>
        <br><br>

        <label>Nota 2:</label>
        <input type="number" name="notas[]" min="0" max="10" step="0.01" required>
        <br><br>

        <label>Nota 3:</label>
        <input type="number" name="notas[]" min="0" max="10" step="0.01" required>
        <br><br>

        <label>Nota 4:</label>
        <input type="number" name="notas[]" min="0" max="10" step="0.01" required>
        <br><br>

        <label>Nota 5:</label>
        <input type="number" name="notas[]" min="0" max="10" step="0.01" required>
        <br><br>

        <input type="submit" value="Calcular">

    </form>

    <?php

    if (isset($_POST["notas"])) {

        $notas = $_POST["notas"];

        $suma = 0;

        foreach ($notas as $nota) {
            $suma += $nota;
        }

        $media = $suma / count($notas);
        $maxima = max($notas);
        $minima = min($notas);

        echo "<h2>Resultados</h2>";
        echo "<p>Nota media: " . round($media, 2) . "</p>";
        echo "<p>Nota máxima: " . $maxima . "</p>";
        echo "<p>Nota mínima: " . $minima . "</p>";

    }

    ?> 
</body>
</html>