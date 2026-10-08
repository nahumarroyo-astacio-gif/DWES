<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php

    if(!isset($_POST["cambiar"])){

    $numero = array();

    for($i = 0; $i<100; $i++){
        $numero[] = rand(0, 20);
    }

    echo"<h1>Números generados</h1>";

    for($i = 0; $i<100; $i++){
        echo $numero[$i] . " ";
    }

    echo"<br>";

    echo'<form method="post">';
    echo'Primer valor: ';
    echo'<input typr="number" name="valor1" min="0" max="20" required><br>';
    echo"Segundo valor:";
    echo'<input typr="number" name="valor2" min="0" max="20" required><br>';

    for($i = 0; $i < 100; $i++){
        echo'<input type="hidden" name="numero[]" value="' . $numero[$i] . '">';
    }

    echo'<input type="submit" name="cambiar" value="cambiar">';
    
    
    echo"</form>";
        
    } else{
        $numero = $_POST["numero"];
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];

        echo"<h1>Resultado</h1>";
        
        for($i = 0; $i < 100; $i++){

        if($numero[$i] == $valor1){

            $numero[$i] = $valor2;

            echo $numero[$i];
        }else{
            echo $numero[$i] . " ";
        }

        }
    }

?>

    
    
</body>
</html>