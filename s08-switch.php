<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba switch</title>
</head>
<body>
    
<h1>Horario</h1>
    <form method="post">
        <select name="dia">
            <option value="lunes">lunes</option>
            <option value="martes">martes</option>
            <option value="miercoles">miercoles</option>
            <option value="jueves">jueves</option>
            <option value="viernes">viernes</option>
        </select>

        <input type="submit" value="Ver horario">

    </form>

<?php

if(isset($_POST["dia"])){

    $dia=$_POST["dia"] ?? "";

    switch($dia){
         case "lunes":
            echo"<h2>Horario Lunes</h2>";
            echo"<p>08:00-09:00 DWES</p>";
            echo"<p>09:00-10:00 DWES</p>";
            echo"<p>10:00-11:00 DIW</p>";
            echo"<p>11:00-11:30 RECREO</p>";
            echo"<p>11:30-12:30 DIW</p>";
            echo"<p>12:30-13:30 PI</p>";
            echo"<p>13:30-14:30 PI</p>";
        break;

        case "martes":
            echo"<h2>Horario martes</h2>";
            echo"<p>08:00-09:00 DWES</p>";
            echo"<p>09:00-10:00 DWES</p>";
            echo"<p>10:00-11:00 IPE II</p>";
            echo"<p>11:00-11:30 RECREO</p>";
            echo"<p>11:30-12:30 IPE II</p>";
            echo"<p>12:30-13:30 DWEC</p>";
            echo"<p>13:30-14:30 DWEC</p>";
        break;

        case "miercoles":
            echo"<h2>Horario miercoles</h2>";
            echo"<p>08:00-09:00 DAW</p>";
            echo"<p>09:00-10:00 DAW</p>";
            echo"<p>10:00-11:00 INGLES</p>";
            echo"<p>11:00-11:30 RECREO</p>";
            echo"<p>11:30-12:30 INGLES</p>";
            echo"<p>12:30-13:30 DWEC</p>";
            echo"<p>13:30-14:30 DWEC</p>";
        break;

        case "jueves":
            echo"<h2>Horario jueves</h2>";
            echo"<p>08:00-09:00 Optativa</p>";
            echo"<p>09:00-10:00 DWES</p>";
            echo"<p>10:00-11:00 DWES</p>";
            echo"<p>11:00-11:30 RECREO</p>";
            echo"<p>11:30-12:30 DIW</p>";
            echo"<p>12:30-13:30 DIW</p>";
            echo"<p>13:30-14:30 DIW</p>";
        break;

        case "viernes":
            echo"<h2>Horario viernes</h2>";
            echo"<p>08:00-09:00 Optativa</p>";
            echo"<p>09:00-10:00 Optativa</p>";
            echo"<p>10:00-11:00 DWEc</p>";
            echo"<p>11:00-11:30 RECREO</p>";
            echo"<p>11:30-12:30 DWEC</p>";
            echo"<p>12:30-13:30 DWES</p>";
            echo"<p>13:30-14:30 IPE II</p>";
        break;


    }


}

?>    

</body>
</html>