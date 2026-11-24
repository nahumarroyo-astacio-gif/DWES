<?php
session_start();

if (!isset($_SESSION["comprar"])) {
    $_SESSION["comprar"] = [];
}

if (isset($_POST["comprar"])) {
    $id = $_POST["comprar"];

    if (isset($_SESSION["comprar"][$id])) {
        $_SESSION["comprar"][$id]++;
    }else {
        $_SESSION["comprar"][$id] = 1;
    }
}

if (isset($_POST["eliminar"])) {
    $id = $_POST["eliminar"];
    unset($_SESSION["comprar"][$id]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;

        }

        body {
            background-color: #ff6d6d;
        }

        .productos {
            border: 1px solid black;
            float: left;
            width: 45%;
            margin-top: 10px;
        }

        .carrito {
            border: 1px solid black;
            float: right;
            width: 45%;
            margin-top: 10px;
        }

        h1 {
            text-align: center;
        }

        .boton {
            padding: 5px;
        }
    </style>

</head>

<body>

    <div class="container">
        <h1>Tienda on-line</h1>
        <hr>

        <div class="productos">
            <h3>Productos</h3>
            <hr>
            <img src="imagenes/Guridi.png" alt="" width="250px" height="250px">
            <p>Jon Guridi</p>
            <p>Precio: 5€</p>
            
            <form method="POST">
                <input type="hidden" name="comprar" value="1">
                <input type="submit" value="Comprar" class="boton">
            </form>
            <br>
            <img src="imagenes/kike.png" alt="" width="250px" height="250px">
            <p>Kike Salas</p>
            <p>Precio: 20€</p>
            
             <form method="POST">
                <input type="hidden" name="comprar" value="2">
                <input type="submit" value="Comprar" class="boton">
            </form>
            <br>
            <img src="imagenes/robbie.png" alt="" width="250px" height="250px">
            <p>Robbie Ure</p>
            <p>Precio: 15€</p>
            
            <form method="POST">
                <input type="hidden" name="comprar" value="3">
                <input type="submit" value="Comprar" class="boton">
            </form>
            <br>
        </div>
        <div class="carrito">
            <h3>Carrito</h3>
            <hr>

            <?php
        
    $total = 0;

    foreach ($_SESSION["comprar"] as $id => $cantidad) {
        if ($id == 1) {
            $nombre = "Jon Guridi";
            $precio = 5;
            $imagen = "imagenes/Guridi.png";
        } elseif($id == 2) {
            $nombre = "Kike Salas";
            $precio = 20;
            $imagen = "imagenes/kike.png";
        }elseif ($id == 3) {
            $nombre = "Robbie Ure";
            $precio = 15;
            $imagen = "imagenes/robbie.png";
        }

        echo "<p>$nombre</p>";
        echo "<p>Precio: $precio €</p>";
        echo "<p>Unidades: $cantidad</p>";

        $total += $precio * $cantidad;
        
    ?>

    <form method="POST">
        <input type="hidden" name="eliminar" value="<?php echo $id; ?>">
        <input type="submit" value="Eliminar" class="boton">
    </form>
    <br>
    <form method="POST">
    <input type="hidden" name="detalle" value="<?php echo $id; ?>">
    <input type="submit" value="Ver detalle" class="boton">
</form>
<br>

<?php
if (isset($_POST["detalle"]) && $_POST["detalle"] == $id) {

    echo "<h3>Detalle del producto</h3>";
    echo "<img src='$imagen' width='150px'>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Precio: $precio €</p>";

    if ($id == 1) {
        echo "<p>Descripción: Jon Guridi, jugador de fútbol.</p>";
    } elseif ($id == 2) {
        echo "<p>Descripción: Kike Salas, jugador de fútbol.</p>";
    } elseif ($id == 3) {
        echo "<p>Descripción: Robbie Ure, jugador de fútbol.</p>";
    }
}
?>
    <?php
    }
    echo"<p>Total: $total</p>";
        
    ?>
      
    
</body>

</html>