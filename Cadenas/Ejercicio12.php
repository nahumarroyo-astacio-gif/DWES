
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>

    <form method="POST">
        Escriba una frase:
        <input type="text" name="texto" required>
        <input type="submit" value="Enviar">
    </form>

    <?php
    function telegrama ($texto){

        $palabras = explode(" ", $texto);

        $contador = 0;

        foreach ($palabras as $palabra) {
            if (strlen($palabra) > 10) {
                $contador++;
            }
        }

        echo "Palabras con mas de diez letras: " . $contador;

        $a = 0;
        $e = 0;
        $i = 0;
        $o = 0;
        $u = 0;

        $texto = strtoupper($texto);
        $longitud = strlen($texto);

        for ($posicion = 0; $posicion < $longitud; $posicion++) {

            $letra = $texto[$posicion];

            switch ($letra) {
                case 'A':
                    $a++;
                    break;

                case 'E':
                    $e++;
                    break;

                case 'I':
                    $i++;
                    break;

                case 'O':
                    $o++;
                    break;

                case 'U':
                    $u++;
                    break;

                default:
                    break;
            }
        }

        echo "<br>Veces que aparece la A: " . $a;
        echo "<br>Veces que aparece la E: " . $e;
        echo "<br>Veces que aparece la I: " . $i;
        echo "<br>Veces que aparece la O: " . $o;
        echo "<br>Veces que aparece la U: " . $u;

        $espacios = 0;

        for ($posicion = 0; $posicion < $longitud; $posicion++) {
            if ($texto[$posicion] == " ") {
                $espacios++;
            }
        }

        $porcentaje = $espacios * 100 / $longitud;

        echo "<br>El porcentaje de espacios es: " . $porcentaje . "%";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = $_POST["texto"];
        telegrama($texto);
    }

    ?>

</body>
</html>
