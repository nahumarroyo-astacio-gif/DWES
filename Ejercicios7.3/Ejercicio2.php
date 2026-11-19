<?php
session_start();
  if(!isset($_SESSION['introducidos'])){
    $_SESSION['introducidos']= 0;
    $_SESSION['sumaImp'] = 0;
    $_SESSION['cantidadImp'] = 0;
    $_SESSION['mayorPar'] = 0;

  }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>

    <form method="POST">
        Introduce un numero:
        <input type="number" name="numero">
        <input type="submit" value="enviar">
    </form>


    <?php
        if ($_SERVER["RQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];

        
        if ($numero >= 0) {

            $_SESSION["introducidos"]++;

            if ($numero % 2 != 0) {
            $_SESSION['cantidadImp']++;
            $_SESSION['sumaImp'] += $numero;
        }else{

            if ($numero > $_SESSION["mayorPar"]) {
                $_SESSION["mayorPar"] = $numero;
            }

        }

        }else {
            echo "Números introducidos: " .$_SESSION["introducidos"];

            if($_SESSION["cantidadImpar"] > 0){
                echo"<p>Media de impares: " . ($_SESSION["sumaIMp"] / $_SESSION["cantidadImp"]) . "</p>";
            }
            echo"<p>Mayor par: " .$_SESSION["mayorPar"] . "</p>";
        }


        }
    ?>
    
</body>
</html>