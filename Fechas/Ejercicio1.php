<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

    <form method="POST">
        Eliga una fecha:
        <input type="number" name="dia" required>
        <input type="number" name="mes" required>
        <input type="number" name="año" required>
        <br>
        
        <label>Selecciona un formato:</label>
        <select name="formulario">
            <option value="1">DD/MM/AAAA</option>
            <option value="2">AAAA/MM/DD</option>
            <option value="3">DD de MM de AAAA</option>
        </select>

        <input type="submit" value="enviar">

    </form>

    <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dia = $_POST["dia"];
        $mes = $_POST["mes"];
        $año = $_POST["año"];
        $formato = $_POST["formulario"];

        if (checkdate($dia, $mes, $año)) {
            switch ($formato) {
                case '1':
                    echo "Fecha: " . $dia ."/" . $mes . "/" . $año;
                    break;

                case '2':
                    echo "Fecha: " . $año ."/" . $mes . "/" . $dia;
                    break;

                case '3':
                    $meses = [
                        1 => "enero";
                        2 => "febrero";
                         3 => "marzo",
                        4 => "abril",
                        5 => "mayo",
                        6 => "junio",
                        7 => "julio",
                        8 => "agosto",
                        9 => "septiembre",
                        10 => "octubre",
                        11 => "noviembre",
                        12 => "diciembre"
                    ];

                    echo "Fecha: " . $dia ."/" . $meses[$mes] . "/" . $año;
                    break;
                
                default:
                    "formato no valido"
                    break;
            }
        }else{
            echo "la fecha introducida no es correcta";
        }
     }
    ?>
    
</body>
</html>