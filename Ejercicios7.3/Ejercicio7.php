<?php

    if (isset($_POST["color"])) {
        $color = $_POST["color"];
        setcookie("color", $color);
    }elseif (isset($_COOKIE["color"])) {
        $color = $_COOKIE["color"];
    }else {
        $color = "white";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body style="background-color: <?php echo $color; ?>">

    <form method="POST">
        <input type="color" class="color" name="color">
        <input type="submit" value="enviar">
    </form>
    
</body>
</html>