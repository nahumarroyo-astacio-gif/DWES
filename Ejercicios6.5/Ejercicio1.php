<?php
require_once "funciones.php";    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>

<form method="post">

    <h1>Título: </h1><input type="text" name="titulo"><br>
    Número 1: <input type="number" name="n1" min="1" max="49"><br>
    Número 2: <input type="number" name="n2" min="1" max="49"><br>
    Número 3: <input type="number" name="n3" min="1" max="49"><br>
    Número 4: <input type="number" name="n4" min="1" max="49"><br>
    Número 5: <input type="number" name="n5" min="1" max="49"><br>
    Número 6: <input type="number" name="n6" min="1" max="49"><br>

    Serie: <input type="number" name="serie" min="1"max="999"><br>

    <input type="submit" value="Jugar">

</form>

<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    $titulo = $_POST["titulo"];

    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];
    $n4 = $_POST["n4"];
    $n5 = $_POST["n5"];
    $n6 = $_POST["n6"];

    $serie = $_POST["serie"];

    $array = combinacion($n1, $n2, $n3, $n4, $n5, $n6, $serie);

    echo imprimeApuesta($array, $titulo);
 }
?>


</body>
</html>