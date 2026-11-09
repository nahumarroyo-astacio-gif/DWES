<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

<form method="POST">
<input type="number" name="capi" required>
<input type="submit" value="Comprobar">

   <?php
       function esCapicua ($numero){

                $invertido = strrev($numero);

            if ($invertido == $numero) {
                return true;
            }else{
                return false;
            }
       }

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $numero = $_POST["capi"];

            if ($invertido == $numero) {
                echo "El número que has enviado es capicúa";
            }else{
                echo "El número que has enviado no es capicúa";
            }
        }

   ?> 
    
</body>
</html>