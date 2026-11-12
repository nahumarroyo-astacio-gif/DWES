<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>

    <form method="POST">
        Introduzca un texto:
        <input type="text" name="texto" required>
        <input type="submit" value="Enviar">
    </form>

    <?php
    function longitud ($texto){
    $longitud = $strlen($texto);

    $palabras = "";
    $posicionPalabra = 0;
    $longitudPalabra = 0;
    $repeticion = 0;

    $contarPalabras = 0;
    $contadorA = 0;

    for ($i=0; $i <= $longitud; $i++) { 
        $caracter = "";

        if($i < $longitud){
            $caracter = $texto[$i];
        }
    }
      
    }
        
    ?>

    
</body>
</html>