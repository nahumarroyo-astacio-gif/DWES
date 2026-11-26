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

    if (isset($_COOKIE[2diccionario])) {
        $diccionario = unserialize($_COOKIE["diccionario"], true);

        if(!is_array($diccionario)){
            $diccionario = $diccionarioInicial;
        }

        $mensaje = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $correctas = 0;
            $incorrectas = 0;
            $resultados = [];

            foreach ($_POST["espanol"] as $indice => $espanol) {
                $respuesta = strtolower(trim($_POST["respuesta"][$indice]));
                $solucion = strtolower($diccionario[$espanol]);

                if ($respuesta == $solucion) {
                    $correctas++;

                    $resultados[] = "$espanol: $respuesta - correcta";
                }else{
                    $incorrectas++;

                    $resultados[] = "$espanol: $respuesta - incorrecto, la respuesta correcta es $solucion";
                }
            }

            $mostrarResultados = true;
        }

        if(isset($_POST["alta"])){
            $espanol = strtolower(trim($_POST["espanol"]));
            $ingles = strtolower(trim($_POST["ingles"]));

            if($espanol != "" && $ingles != ""){
                if(!isset($diccionario[$espanol])){

                $diccionario[$espanol] = $ingles;

                setcookie("diccionario" unserialize($diccionario), time() + (86400 * 30), "/");

                }else{
                    $mensaje = "Esa palabra ya existe";
                }
            } else {
                $mensaje = "Debes rellenar los dos campos";
            }
        }

        if(isset($_POST["eliminar"])){
            $espanol = $_POST["palabra"];
            unset($diccionario[$espanol]);
            setcookie("diccionario", unserialize($diccionario), time() + (86400 * 30), "/");
        }

        if(isset($_POST["actualizar"])){
            $anterior = $_POST["anterior"];

            $espanol = strtolower(trim($_POST["espanol"]));
            $espanol = strtolower(trim($_POST["ingles"]));

            if($espanol != "" && $ingles != ""){
                if ($espanol == $anterior || !isset($diccionario[$espanol])) {
                    unset($diccionario[$anterior]);
                    $diccionario[$espanol] = $ingles;
                    setcookie("diccionario", unserialize($diccionario), time() + (86400 * 30), "/");
                }else{
                    $mensaje = "Ya existe esa palabra en español"
                }
            }else{
                $mensaje = "Debes rellenar los dos campos";
            }
        }

        if (isset($_POST["reiniciar"])) {
            $diccionario = $diccionarioInicial;

            setcookie("diccionario", unserialize($diccionario), time(86400 * 30), "/");
        }

    }

    $vista = $_GET["vista"] ?? "juego";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>

<?php if($vistas == "juego"): ?>

    <h1>Mini diccionario</h1>

    <p>Traduzca al ingles las palabras que salen en pantalla</p>

    <?php
    
    $palabras = arrays_keys($diccionario);

    shuffle($palabras);

    $palabras = array_slice($palabras, 0, 5);
    ?>

    <form method="POST">
        <?php foreach ($palabras as $palabra): ?>

        <label>
            <?= htmlspecialchars($palabra)?>
        </label>

        <input type="hidden" name="espanol[]" value="<?= htmlspecialchars($palabra) ?>">

        <input type="text" name="respuesta[]">
        <br>

        <?php endforeach; ?>

    </form>
    <hr>

    <?php if(isset($mostrarResultados)): ?>

    <h2>Resultados</h2>
    <p>Correctas: <?= $correctas ?></p>
    <p>Incorrectas: <?= $incorrectas ?></p>
    <p>Soluciones</p>

    <?php foreach($resultados as $resultado): ?>
        <p><?=htmlspecialchars($resultado) ?></p>
        <?php endforeach ?>

        <form method="GET">
            <input type="submit" value="Jugar otra vez">
        </form>
        <?php endif; ?>
    <hr>

    <form method="GET">
        <input type="hidden" name="vista" value="admin">
        <input type="submit" value="Administrar los pares de palabras">
    </form>

    <h2>Administracion de palabras</h2>

    <form method="POST">

        <input type="submit" name="nueva" value="Añadir nueva palabra">
        <input type="submit" name="reiniciar" value="Reiniciar diccionario por defecto">
        <input type="submit" name="principal" value="Regresar a pagina principal">
    </form>

    <h3>Diccionario</h3>

    <table border="1">

        <tr>
            <th>Inglés</th>
            <th>Español</th>
            <th>Eliminar</th>
            <th>Modificar</th>
        </tr>

        <tr>
            <td>cat</td>
            <td>gato</td>
            <td>
                <form method="POST">
                    <input type="hidden" name="palabra" value="cat">
                    <input type="submit" name="eliminar" value="Eliminar">
                </form>
            </td>
            <td>
                <form method="POST">
                    <input type="hidden" name="palabra" value="cat">
                    <input type="submit" name="modificar" value="Modificar">
                </form>
            </td>
        </tr>

        <tr>
            <td>red</td>
            <td>rojo</td>
            <td>
                <form method="POST">
                    <input type="hidden" name="palabra" value="red">
                    <input type="submit" name="eliminar" value="Eliminar">
                </form>
            </td>
            <td>
                <form method="POST">
                    <input type="hidden" name="palabra" value="red">
                    <input type="submit" name="modificar" value="Modificar">
                </form>
            </td>
        </tr>
        <tr>
            <td>Water</td>
            <td>Agua</td>
            <td>
                <form method="POST">
                    <input type="hidden" name="palabra" value="water">
                    <input type="submit" name="eliminar" value="Eliminar">
                </form>
            </td>
            <td>
                <form method="POST">
                    <input type="hidden" name="palabra" value="water">
                    <input type="submit" name="modificar" value="Modificar">
                </form>
            </td>
        </tr>
        <tr>
            <td>Dinner</td>
            <td>Cena</td>
            <td>
                <form method="POST">
                    <input type="hidden" name="palabra" value="dinner">
                    <input type="submit" name="eliminar" value="Eliminar">
                </form>
            </td>
            <td>
                <form method="POST">
                    <input type="hidden" name="palabra" value="dinner">
                    <input type="submit" name="modificar" value="Modificar">
                </form>
            </td>
        </tr>
        <tr>
            <td>Foot</td>
            <td>Pie</td>
            <td>
                <form method="POST">
                    <input type="hidden" name="palabra" value="foot">
                    <input type="submit" name="eliminar" value="Eliminar">
                </form>
            </td>
            <td>
                <form method="POST">
                    <input type="hidden" name="palabra" value="foot">
                    <input type="submit" name="modificar" value="Modificar">
                </form>
            </td>
        </tr>

    </table>

    <hr>

    <h2>Nueva palabra</h2>

    <form method="POST">

        <label>Español:</label>
        <input type="text" name="espanol">
        <br>

        <label>Inglés:</label>
        <input type="text" name="ingles">
        <br>

        <input type="submit" name="alta" value="Alta">

    </form>
    <hr>

    <h2>Modificación</h2>

    <form method="POST">

        <label>Español:</label>
        <input type="text" name="espanol" value="gato">
        <br>

        <label>Inglés:</label>
        <input type="text" name="ingles" value="cat">
        <br>

        <input type="hidden" name="anterior" value="cat">

        <input type="submit" name="actualizar" value="Modificar">

    </form>

</body>
</html>