<?php
  session_start();
  if (!isset($_SESSION["suma"])) {
    $_SESSION["acumulado"] = 0;
    $_SESSION["suma"] = 0;
  }  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>

    <form method="POST">
        Introduce un número:
        <input type="number" name="numero">
        <input type="submit" value="enviar">
    </form>
    
    <?php
     
     if($_SERVER["REQUEST_METHOD"] == "POST"){
        $numero = $_POST["numero"];

        if ($numero > 0 && $_SESSION["suma"] <= 10000) {
            
            $_SESSION["acumulado"]++;
            $_SESSION["suma"] += $numero;

        }

        if($_SESSION["suma"] > 10000 || $numero < 0) {
            echo "Total acumulado: " . $_SESSION["suma"];
            echo "Número introducido: " . $_SESSION["acumulado"] . "</p>";
            echo "Media: " . ($_SESSION["suma"] /$_SESSION["acumulado"]) . "</p>";

        }
     }

    ?>


</body>
</html>