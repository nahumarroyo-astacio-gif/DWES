<?php

if(!isset($_SESSION['persona'])){
    $_SESSION['persona']=[
 ['nombre'=>'Anita','sexo'=>'m','orientacion'=>'bis'],
 ['nombre'=>'Lolita','sexo'=>'m','orientacion'=>'bis'],
 ['nombre'=>'Pepito','sexo'=>'h','orientacion'=>'bis'],
 ['nombre'=>'Juanito','sexo'=>'h','orientacion'=>'bis'],
 ['nombre'=>'Roberto','sexo'=>'h','orientacion'=>'het'],
 ['nombre'=>'Antonio','sexo'=>'h','orientacion'=>'het'],
 ['nombre'=>'Manuela','sexo'=>'m','orientacion'=>'het'],
 ['nombre'=>'Isabel','sexo'=>'m','orientacion'=>'het'],
 ['nombre'=>'Jenifer','sexo'=>'m','orientacion'=>'hom'],
 ['nombre'=>'Susan','sexo'=>'m','orientacion'=>'hom'],
 ['nombre'=>'Peter','sexo'=>'h','orientacion'=>'hom'],
 ['nombre'=>'Mike','sexo'=>'h','orientacion'=> 'hom']],
}

if(isset($_POST['guardar'])){
    $nombre = trim($_POST['nombre']);
    $sexo = $_POST['sexo'];
    $orientacion = $_POST['orientacion'];

    if($nombre != ''){
        $_SESSION['persona'][] = [
            'nombre' => $nombre;
            'sexo ' => $sexo;
            'orientacion' => $orientacion
        ]
    }
}
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    
<h2>Primera página: Personas</h2>

<form>
    Nombre: <input type="text" name="nombre" required><br>
    Sexo: <select name="sexo">
            <option value="h">Hombre</option>
            <option value="m">Mujer</option>
    </select><br>
    Orientacion: <select name="orientacion">
            <option value="het">Heterosexual</option>
            <option value="hom">Homosexual</option>
            <option value="bis">Bisexual</option>
    </select><br>
    
    <input type="submit" name="guardar" value="Añadir persona">
</form>

<form action="parejas.html" method="post">

    <input type="submit" value="Generar parejas">

</form>

<h3>Personas introducidas</h3>

<ul>
<?php

foreach($_SESSION['persona'] as $persona){
    echo $persona['nombre'];
}
    
?>
</ul>
    
</body>
</html>