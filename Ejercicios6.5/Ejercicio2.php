<?php
    require_once "controlAcceso.php";
    
    if (!isset($_POST["fila"])) {
        $fila = rand(1, 5);
        $columna = rand(0, 4);
    }else{
        $fila = $_POST["fila"];
        $columna = $_POST["columna"];
    }

    $letras = ["A", "B", "C", "D", "E"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>

<h1>Control de acceso</h1>

<form method="POST">

    <label>Perfil:</label>
    <select>
        <option value="admin">Admin</option>
        <option value="estandar">Estandar</option>
    </select>

    <p>
        Coordenada solicitada:
        <?php echo $fila . $letras[$columna];?>
    </p>

    <input type="hidden" name="fila" value="<?php echo $fila ?>">
    <input type="hidden" name="columna" value="<?php echo $columna ?>">

    <label>Introduce la clave:</label>
    <input type="number name=valor" required>

    <input type="submit" value="Entrar">

</form>

    <?php

    if(isset($_POST["valor"])){
        $tarjeta = dameTarjeta($_POST["perfil"]);

        if (compruebaClave($tarjeta, $fila, $columna, $_POST["valor"])) {
            echo "<p>Acceso correcto</p>";
            echo "<a href='protegida.php'>Entar en la página protegida</a>";
        }else{
            echo "<p>Clave incorrecta</p>";
            echo "<a href='index.php'>Intentar de nuevo</a>";
        }
    }

    echo "<h2>Tarjeta admin</h2>";
    echo imprimeTarjeta(dameTarjeta("admin"));
    echo "<h2>Tarjeta estandar</h2>";
    echo imprimeTarjeta(dameTarjeta("estandar"));
    ?>
    
</body>
</html>