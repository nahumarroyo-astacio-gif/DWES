<?php
require_once ("../funciones/funciones10.php");    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>

<form method="POST">
Introduzca su nombre completo: 
<input type="text" name="nombre" required>
<input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    echo nombreCompleto($nombre);
}
    
?>
    
</body>
</html>