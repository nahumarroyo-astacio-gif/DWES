<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Diccionario de extensiones</h1>
<?php
 $extensiones = array(
        "php" => "Archivo de código PHP",
        "html" => "Documento HTML",
        "css" => "Hoja de estilos",
        "js" => "Archivo JavaScript",
        "sql" => "Archivo de consultas SQL",
        "jpg" => "Imagen JPEG"
    );

    if(isset($_POST["extension"])){
        $extension = strtolower(trim($_POST[extension]));

        if(isset($extensiones[$extension])){
            echo"<p>Descripción: " . $extensiones[$extension] . "</p>";
        } else {
            echo"<p>Extension no encontrada</p>";
        }
    }
?>

<form action="" method="post">
        <label for="extension">Introduce una extensión:</label>
        <input type="text" name="extension" id="extension" required>
        <input type="submit" value="Buscar">
</form>

</body>
</html>