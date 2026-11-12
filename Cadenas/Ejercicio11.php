<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>

    <form method="POST">
        Introduce un número romano:
        <input type="text" name="romano" required>
        <input type="submit" value="Enviar">
    </form>

    <?php
    function numeroRomano ($romano){

        $numRomano = strtoupper($romano);

        $letras = strlen($romano);

        $total=0;
        $correcto = true;

        for ($i=0; $i < $letras; $i++) { 
            $letra = $numRomano[$i];

            switch ($letra) {
                case 'M':
                    $total += 1000;
                    break;

                case 'D':
                    $total += 500;
                    break;

                case 'C':
                    $total += 100;
                    break;

                case 'L':
                    $total += 50;
                    break;

                case 'X':
                    $total += 10;
                    break;

                case 'V':
                    $total += 5;
                    break;

                case 'I':
                    $total += 1;
                    break;
                
                default:
                    $correcto = false;
                    break;
            }
        }

        if ($correcto == true) {
            echo "El número decimal es: " . $total;
        } else {
            echo "El número introducido no es valido";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $romano = $_POST["romano"];
        echo numeroRomano("total");
    }

        
    ?>
    
</body>
</html>