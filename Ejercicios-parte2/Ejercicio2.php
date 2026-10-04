<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>

    <h1>Loteria primitiva</h1>
<form method="post">

    Número 1: <input type="number" name="n1" min="1" max="49" required><br>
    Número 2: <input type="number" name="n2" min="1" max="49" required><br>
    Número 3: <input type="number" name="n3" min="1" max="49" required><br>
    Número 4: <input type="number" name="n4" min="1" max="49" required><br>
    Número 5: <input type="number" name="n5" min="1" max="49" required><br>
    Número 6: <input type="number" name="n6" min="1" max="49" required><br>

    Serie: <input type="number" name="serie" min="1"max="999" required><br>

    <input type="submit" value="Jugar">

</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];
    $n4 = $_POST["n4"];
    $n5 = $_POST["n5"];
    $n6 = $_POST["n6"];
    $nserie = $_POST["serie"];

    $generado1 =rand(1, 49);
    $generado2 =rand(1, 49);
    $generado3 =rand(1, 49);
    $generado4 =rand(1, 49);
    $generado5 =rand(1, 49);
    $generado6 =rand(1, 49);
    $serieGenerada = rand(1, 999);

    echo"<h2>Resultados</h2>";

    echo"<table border= '1'>";
    
    echo"<tr>";
    echo"<th>Combinación</th>";
    echo"<th>Número 1</th>";
    echo"<th>Número 2</th>";
    echo"<th>Número 3</th>";
    echo"<th>Número 4</th>";
    echo"<th>Número 5</th>";
    echo"<th>Número 6</th>";
    echo "<th>Serie</th>"; 
    echo "</tr>";
    
    echo "<tr>"; 
    echo "<td>Generada</td>";
    echo "<td>$generado1</td>";
    echo "<td>$generado2</td>";
    echo "<td>$generado3</td>";
    echo "<td>$generado4</td>";
    echo "<td>$generado5</td>";
    echo "<td>$generado6</td>";
    echo "<td>$serieGenerada</td>"; 
    echo "</tr>";

    echo "<tr>";
    echo "<td>Introducida</td>";
    echo "<td>$n1</td>";
    echo "<td>$n2</td>";
    echo "<td>$n3</td>";
    echo "<td>$n4</td>";
    echo "<td>$n5</td>";
    echo "<td>$n6</td>";
    echo "<td>$nserie</td>"; 
    echo "</tr>"; 
    
    echo "</table>";

}

?>
    
</body>
</html>