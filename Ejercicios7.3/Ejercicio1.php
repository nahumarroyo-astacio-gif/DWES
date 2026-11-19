<?php
    session_start();
    if(!isset($_SESSION['suma'])){
        $_SESSION['suma'] = 0;
        $_SESSION['cantidad'] = 0;
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    
    <form method="POST">
        Introduce un número:
        <input type="number" name="numero">
        <input type="submit" value="Enviar">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $numero = $_POST["numero"];


            if($numero < 0){
                if($_SESSION['cantidad']>0){
                    $media = $_SESSION['suma'] / $_SESSION['cantidad'];
                    echo "la media es: " . $media;
                }else{
                    echo "No has introducidos numeros positivos";
                }
                
            }else{
                $_SESSION['suma'] += $numero;
                $_SESSION['cantidad']++;
            }
        }
    ?>

</body>
</html>