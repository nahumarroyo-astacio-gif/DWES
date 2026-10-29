<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Datos aspirantes a trabajo</h1>

    <form method="post">
        Nombre:<input type="text" name="nombre" required> <br>
        Edad:<input type="number" name="edad" required> <br>
        Años de experiencia:<input type="number" name="añosExp" required> <br>
        Correo:<input type="email" name="email" required> <br>
        <input type="submit" name="Enviar" >
    </form>
    
    <?php

    if(!isset($_POST["aspirantes"])){
        $aspirante=[];
    }else{
        $aspirante=unserialize   
    }


    ?>
</body>
</html>