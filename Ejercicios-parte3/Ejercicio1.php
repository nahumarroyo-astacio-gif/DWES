<?php

$acertado = false;
$fallado = false;

if (isset($_POST["adivina"])) {

    $respuesta = strtolower(trim($_POST["adivina"]));

    if ($respuesta == "perro") {
        $acertado = true;
    } else {
        $fallado = true;
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Adivina la imagen</title>

    <style>

        .cuadricula {
            display: grid;
            grid-template-columns: repeat(3, 150px);
            grid-template-rows: repeat(3, 150px);
        }

        .cuadrado {
            width: 150px;
            height: 150px;
            background-color: black;
            background-image: url("img/file_00000000fbd082108bc61848f2166bca.png");
            background-size: 450px 450px;
            cursor: pointer;
        }

        .uno {
            background-position: 0 0;
        }

        .dos {
            background-position: -150px 0;
        }

        .tres {
            background-position: -300px 0;
        }

        .cuatro {
            background-position: 0 -150px;
        }

        .cinco {
            background-position: -150px -150px;
        }

        .seis {
            background-position: -300px -150px;
        }

        .siete {
            background-position: 0 -300px;
        }

        .ocho {
            background-position: -150px -300px;
        }

        .nueve {
            background-position: -300px -300px;
        }

        /* Ocultamos la imagen */

        .oculto {
            background-image: none;
        }

        /* Cuando acertamos */

        .imagen-completa {
            width: 450px;
            height: 450px;
        }

    </style>

</head>

<body>

<?php if ($acertado) { ?>

    <h1>¡Felicidades! Has acertado</h1>

    <img
        src="img/file_00000000fbd082108bc61848f2166bca.png"
        class="imagen-completa"
    >

<?php } else { ?>

    <h1>Adivina la imagen</h1>

    <?php if ($fallado) { ?>

        <h2>Has fallado</h2>

        <form method="get">
            <input type="submit" value="Volver">
        </form>

    <?php } ?>

    <div class="cuadricula">

        <div class="cuadrado uno oculto"></div>

        <div class="cuadrado dos oculto"></div>

        <div class="cuadrado tres oculto"></div>

        <div class="cuadrado cuatro oculto"></div>

        <div class="cuadrado cinco oculto"></div>

        <div class="cuadrado seis oculto"></div>

        <div class="cuadrado siete oculto"></div>

        <div class="cuadrado ocho oculto"></div>

        <div class="cuadrado nueve oculto"></div>

    </div>

    <br>

    <form method="post">

        ¿Qué imagen crees que es?<br><br>

        <input type="text" name="adivina" required>

        <input type="submit" value="Comprobar">

    </form>

<?php } ?>


<script>

    let cuadrados = document.querySelectorAll(".cuadrado");

    cuadrados.forEach(function(cuadrado) {

        cuadrado.addEventListener("click", function() {

            cuadrado.classList.remove("oculto");

            setTimeout(function() {

                cuadrado.classList.add("oculto");

            }, 2000);

        });

    });

</script>

</body>
</html>