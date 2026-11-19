<?php
  session_start();
  if(isset($_SESSION["usuario"])){
    header("Location: ejercicio1.php");
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>

    <form method="POST">
      Usuario:
      <input type="text" name="usuario" required>

      Contraseña:
      <input type="password" name="contraseña" required>
    </form>

    <?php
     
      if($_SERVER("REQUEST_METHOD") == "POST"){
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];

        if ($usuario == "admin" && $contraseña == "1234") {
          $_SESSION["usuario"] = $usuario;

          header("Location: ejercicio1.php");
          exit;
        }else{
          echo "Usuario o contraseña incorrectos";
        }
      }
     
    ?>
    
</body>
</html>