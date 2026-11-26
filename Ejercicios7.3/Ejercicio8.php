
<?php

    $diccionarioInicial = [
        "gato" => "cat",
        "rojo" => "red",
        "agua" => "water",
        "cena" => "dinner",
        "pie" => "foot",
        "arbol" => "tree",
        "sol" => "sun",
        "ordenador" => "computer"
    ];

    // Recuperar diccionario de la cookie
    if (isset($_COOKIE["diccionario"])) {

        $diccionario = unserialize($_COOKIE["diccionario"], ["allowed_classes" => false]);

        if (!is_array($diccionario)) {
            $diccionario = $diccionarioInicial;
        }

    } else {
        $diccionario = $diccionarioInicial;
    }

    $mensaje = "";

    // Procesar formularios
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Comprobar respuestas
        if (isset($_POST["comprobar"])) {

            $correctas = 0;
            $incorrectas = 0;
            $resultados = [];

            foreach ($_POST["espanol"] as $indice => $espanol) {

                $respuesta = strtolower(trim($_POST["respuesta"][$indice]));
                $solucion = strtolower($diccionario[$espanol]);

                if ($respuesta == $solucion) {

                    $correctas++;
                    $resultados[] = "$espanol: $respuesta - correcta";

                } else {

                    $incorrectas++;
                    $resultados[] = "$espanol: $respuesta - incorrecto, la respuesta correcta es $solucion";
                }
            }

            $mostrarResultados = true;
        }

        // Añadir palabra
        if (isset($_POST["alta"])) {

            $espanol = strtolower(trim($_POST["espanol"]));
            $ingles = strtolower(trim($_POST["ingles"]));

            if ($espanol != "" && $ingles != "") {

                if (!isset($diccionario[$espanol])) {

                    $diccionario[$espanol] = $ingles;

                    setcookie("diccionario", serialize($diccionario), time() + (86400 * 30), "/");

                    header("Location: ?vista=admin");
                    exit;

                } else {
                    $mensaje = "Esa palabra ya existe";
                }

            } else {
                $mensaje = "Debes rellenar los dos campos";
            }
        }

        // Eliminar palabra
        if (isset($_POST["eliminar"])) {

            $espanol = $_POST["palabra"];

            unset($diccionario[$espanol]);

            setcookie("diccionario", serialize($diccionario), time() + (86400 * 30), "/");

            header("Location: ?vista=admin");
            exit;
        }

        // Modificar palabra
        if (isset($_POST["actualizar"])) {

            $anterior = $_POST["anterior"];

            $espanol = strtolower(trim($_POST["espanol"]));
            $ingles = strtolower(trim($_POST["ingles"]));

            if ($espanol != "" && $ingles != "") {

                if ($espanol == $anterior || !isset($diccionario[$espanol])) {

                    unset($diccionario[$anterior]);

                    $diccionario[$espanol] = $ingles;

                    setcookie("diccionario", serialize($diccionario), time() + (86400 * 30), "/");

                    header("Location: ?vista=admin");
                    exit;

                } else {
                    $mensaje = "Ya existe esa palabra en español";
                }

            } else {
                $mensaje = "Debes rellenar los dos campos";
            }
        }

        // Reiniciar diccionario
        if (isset($_POST["reiniciar"])) {

            $diccionario = $diccionarioInicial;

            setcookie("diccionario", serialize($diccionario), time() + (86400 * 30), "/");

            header("Location: ?vista=admin");
            exit;
        }
    }

    // Seleccionar vista
    $vista = $_GET["vista"] ?? "juego";

    // Recuperar palabra que se quiere modificar
    $anterior = $_GET["palabra"] ?? "";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>

<body>

<?php if ($vista == "juego"): ?>

    <h1>Mini diccionario</h1>

    <p>Traduzca al inglés las palabras que salen en pantalla</p>

    <?php

        $palabras = array_keys($diccionario);

        shuffle($palabras);

        $palabras = array_slice($palabras, 0, 5);

    ?>

    <form method="POST">

        <?php foreach ($palabras as $palabra): ?>

            <label>
                <?= htmlspecialchars($palabra) ?>:
            </label>

            <input type="hidden" name="espanol[]" value="<?= htmlspecialchars($palabra) ?>">

            <input type="text" name="respuesta[]">

            <br>

        <?php endforeach; ?>

        <input type="submit" name="comprobar" value="Aceptar">

    </form>

    <hr>

    <?php if (isset($mostrarResultados)): ?>

        <h2>Resultados</h2>

        <p>Correctas: <?= $correctas ?></p>

        <p>Incorrectas: <?= $incorrectas ?></p>

        <h3>Soluciones</h3>

        <?php foreach ($resultados as $resultado): ?>

            <p><?= htmlspecialchars($resultado) ?></p>

        <?php endforeach; ?>

        <form method="GET">
            <input type="submit" value="Jugar otra vez">
        </form>

    <?php endif; ?>

    <hr>

    <form method="GET">
        <input type="hidden" name="vista" value="admin">
        <input type="submit" value="Administrar los pares de palabras">
    </form>


<?php elseif ($vista == "admin"): ?>

    <h2>Administración de palabras</h2>

    <form method="GET">
        <input type="hidden" name="vista" value="alta">
        <input type="submit" value="Añadir nueva palabra">
    </form>

    <form method="POST">
        <input type="submit" name="reiniciar" value="Reiniciar diccionario por defecto">
    </form>

    <form method="GET">
        <input type="submit" value="Regresar a página principal">
    </form>

    <h3>Diccionario</h3>

    <table border="1">

        <tr>
            <th>Inglés</th>
            <th>Español</th>
            <th>Eliminar</th>
            <th>Modificar</th>
        </tr>

        <?php foreach ($diccionario as $espanol => $ingles): ?>

            <tr>

                <td><?= htmlspecialchars($ingles) ?></td>

                <td><?= htmlspecialchars($espanol) ?></td>

                <td>
                    <form method="POST">
                        <input type="hidden" name="palabra" value="<?= htmlspecialchars($espanol) ?>">
                        <input type="submit" name="eliminar" value="Eliminar">
                    </form>
                </td>

                <td>
                    <form method="GET">
                        <input type="hidden" name="vista" value="modificar">
                        <input type="hidden" name="palabra" value="<?= htmlspecialchars($espanol) ?>">
                        <input type="submit" value="Modificar">
                    </form>
                </td>

            </tr>

        <?php endforeach; ?>

    </table>


<?php elseif ($vista == "alta"): ?>

    <h2>Nueva palabra</h2>

    <p><?= htmlspecialchars($mensaje) ?></p>

    <form method="POST">

        <label>Español:</label>
        <input type="text" name="espanol">

        <br>

        <label>Inglés:</label>
        <input type="text" name="ingles">

        <br>

        <input type="submit" name="alta" value="Alta">

    </form>

    <form method="GET">
        <input type="hidden" name="vista" value="admin">
        <input type="submit" value="Volver">
    </form>


<?php elseif ($vista == "modificar"): ?>

    <h2>Modificación</h2>

    <?php if (isset($diccionario[$anterior])): ?>

        <form method="POST">

            <label>Español:</label>

            <input type="text" name="espanol" value="<?= htmlspecialchars($anterior) ?>">

            <br>

            <label>Inglés:</label>

            <input type="text" name="ingles" value="<?= htmlspecialchars($diccionario[$anterior]) ?>">

            <br>

            <input type="hidden" name="anterior" value="<?= htmlspecialchars($anterior) ?>">

            <input type="submit" name="actualizar" value="Modificar">

        </form>

    <?php else: ?>

        <p>La palabra no existe</p>

    <?php endif; ?>

    <form method="GET">
        <input type="hidden" name="vista" value="admin">
        <input type="submit" value="Volver">
    </form>

<?php endif; ?>

</body>
</html>
