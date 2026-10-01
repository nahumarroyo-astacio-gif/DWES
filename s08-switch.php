```php
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Horario Kawaii 🍆🐱</title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Comic Sans MS", "Trebuchet MS", sans-serif;
            min-height: 100vh;

            background:
                radial-gradient(circle at 10% 20%, #ffffff 0 2px, transparent 3px),
                radial-gradient(circle at 80% 10%, #ffffff 0 2px, transparent 3px),
                radial-gradient(circle at 20% 80%, #ffffff 0 2px, transparent 3px),
                linear-gradient(135deg, #f5e6ff, #ffe6f5, #e8dcff);

            background-size: 120px 120px;

            color: #5d426b;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 40px 20px;

            overflow-x: hidden;
        }

        /* Berenjenas decorativas */

        .berenjena {
            position: fixed;
            font-size: 70px;
            z-index: 0;

            animation: flotar 4s ease-in-out infinite;
        }

        .berenjena1 {
            top: 8%;
            left: 5%;
            transform: rotate(-20deg);
        }

        .berenjena2 {
            bottom: 8%;
            right: 5%;
            transform: rotate(20deg);
            animation-delay: 1s;
        }

        .berenjena3 {
            top: 45%;
            right: 2%;
            font-size: 50px;
            animation-delay: 2s;
        }

        .berenjena4 {
            bottom: 20%;
            left: 3%;
            font-size: 45px;
            animation-delay: 3s;
        }

        @keyframes flotar {

            0%, 100% {
                transform: translateY(0) rotate(-10deg);
            }

            50% {
                transform: translateY(-18px) rotate(10deg);
            }
        }


        /* Gatitos */

        .gatito {
            position: fixed;
            font-size: 75px;
            z-index: 0;

            animation: gatito 5s ease-in-out infinite;
        }

        .gato1 {
            top: 5%;
            right: 8%;
        }

        .gato2 {
            bottom: 5%;
            left: 7%;
            animation-delay: 2s;
        }

        @keyframes gatito {

            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-15px) rotate(5deg);
            }
        }


        /* Tarjeta principal */

        .contenedor {
            position: relative;
            z-index: 2;

            width: 100%;
            max-width: 650px;

            background: rgba(255, 255, 255, 0.88);

            border: 5px solid #e6c8f5;

            border-radius: 35px;

            padding: 35px;

            box-shadow:
                0 20px 50px rgba(100, 60, 120, 0.20),
                inset 0 0 20px rgba(255, 255, 255, 0.8);

            backdrop-filter: blur(8px);

            animation: aparecer 0.8s ease;
        }

        @keyframes aparecer {

            from {
                opacity: 0;
                transform: translateY(30px) scale(0.95);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }


        /* Cabecera */

        .cabecera {
            text-align: center;
            margin-bottom: 30px;
        }

        h1 {
            color: #9b59b6;

            font-size: 42px;

            text-shadow:
                3px 3px 0 #ead5f5,
                5px 5px 10px rgba(120, 70, 140, 0.15);

            margin-bottom: 8px;
        }

        .subtitulo {
            color: #b77bc8;
            font-size: 17px;
        }


        /* Decoración */

        .decoracion {
            text-align: center;

            font-size: 25px;

            letter-spacing: 8px;

            margin: 15px 0 25px;
        }


        /* Formulario */

        form {
            background: #faf3ff;

            border: 3px dashed #d8afea;

            border-radius: 25px;

            padding: 25px;

            text-align: center;

            margin-bottom: 30px;
        }

        label {
            display: block;

            font-weight: bold;

            color: #80518e;

            font-size: 18px;

            margin-bottom: 12px;
        }

        select {
            width: 100%;

            padding: 14px 18px;

            border-radius: 15px;

            border: 3px solid #d9b5e8;

            background: white;

            color: #70477d;

            font-family: inherit;

            font-size: 16px;

            cursor: pointer;

            outline: none;

            transition: 0.3s;
        }

        select:hover,
        select:focus {
            border-color: #a85bc2;

            box-shadow: 0 0 15px rgba(168, 91, 194, 0.25);
        }


        /* Botón */

        input[type="submit"] {
            margin-top: 18px;

            border: none;

            padding: 14px 30px;

            border-radius: 50px;

            background: linear-gradient(
                135deg,
                #b86ed1,
                #8e44ad
            );

            color: white;

            font-family: inherit;

            font-size: 17px;

            font-weight: bold;

            cursor: pointer;

            box-shadow:
                0 7px 0 #70358a,
                0 12px 20px rgba(110, 50, 130, 0.2);

            transition: 0.2s;
        }

        input[type="submit"]:hover {
            transform: translateY(-3px) scale(1.03);

            box-shadow:
                0 10px 0 #70358a,
                0 15px 25px rgba(110, 50, 130, 0.25);
        }

        input[type="submit"]:active {
            transform: translateY(4px);

            box-shadow:
                0 3px 0 #70358a;
        }


        /* Resultado del horario */

        .resultado {
            background: linear-gradient(
                135deg,
                #fff8ff,
                #f8efff
            );

            border-radius: 25px;

            border: 3px solid #e2c4ef;

            padding: 25px;

            box-shadow:
                inset 0 0 20px rgba(190, 130, 210, 0.08);
        }

        h2 {
            text-align: center;

            color: #9b59b6;

            font-size: 28px;

            margin-bottom: 20px;
        }

        .hora {
            background: white;

            border-radius: 15px;

            padding: 12px 18px;

            margin: 8px 0;

            border-left: 6px solid #c27bdc;

            box-shadow: 0 4px 10px rgba(100, 50, 120, 0.08);

            transition: 0.2s;
        }

        .hora:hover {
            transform: translateX(6px);

            background: #fff7ff;

            border-left-color: #9b59b6;
        }


        /* Pie */

        .pie {
            text-align: center;

            margin-top: 25px;

            color: #b17ac0;

            font-size: 14px;
        }


        /* Estrellitas */

        .estrella {
            position: fixed;

            color: white;

            font-size: 25px;

            animation: brillo 2s infinite;
        }

        .estrella1 {
            top: 25%;
            left: 15%;
        }

        .estrella2 {
            top: 70%;
            right: 15%;
            animation-delay: 1s;
        }

        .estrella3 {
            top: 15%;
            left: 45%;
            animation-delay: 0.5s;
        }

        @keyframes brillo {

            0%, 100% {
                opacity: 0.3;
                transform: scale(0.8);
            }

            50% {
                opacity: 1;
                transform: scale(1.3);
            }
        }


        /* Móvil */

        @media (max-width: 600px) {

            body {
                padding: 20px 10px;
            }

            .contenedor {
                padding: 22px;

                border-radius: 25px;
            }

            h1 {
                font-size: 32px;
            }

            .gatito {
                font-size: 50px;
            }

            .berenjena {
                font-size: 45px;
            }

        }

    </style>
</head>


<body>

    <!-- Decoraciones -->

    <div class="berenjena berenjena1">🍆</div>
    <div class="berenjena berenjena2">🍆</div>
    <div class="berenjena berenjena3">🍆</div>
    <div class="berenjena berenjena4">🍆</div>

    <div class="gatito gato1">🐱</div>
    <div class="gatito gato2">😸</div>

    <div class="estrella estrella1">✦</div>
    <div class="estrella estrella2">✧</div>
    <div class="estrella estrella3">✦</div>


    <!-- Contenedor -->

    <div class="contenedor">

        <div class="cabecera">

            <h1>🐱 Mi Horario 🍆</h1>

            <p class="subtitulo">
                ✨ Horario académico súper kawaii ✨
            </p>

            <div class="decoracion">
                🐾 🍆 🐾 🍆 🐾
            </div>

        </div>


        <!-- Formulario -->

        <form method="post">

            <label for="dia">
                🐱 Elige un día, nya~
            </label>

            <select name="dia" id="dia">

                <option value="lunes">🍆 Lunes</option>
                <option value="martes">🐱 Martes</option>
                <option value="miercoles">🍆 Miércoles</option>
                <option value="jueves">🐱 Jueves</option>
                <option value="viernes">🍆 Viernes</option>

            </select>

            <input type="submit" value="✨ Ver horario ✨">

        </form>


        <!-- PHP -->

        <?php

        $dia = $_POST["dia"] ?? "";

        if ($dia != "") {

            echo '<div class="resultado">';

            switch ($dia) {

                case "lunes":

                    echo "<h2>🐱 Horario Lunes 🍆</h2>";

                    echo '<div class="hora">⏰ 08:00 - 09:00 → DWES</div>';
                    echo '<div class="hora">⏰ 09:00 - 10:00 → DWES</div>';
                    echo '<div class="hora">⏰ 10:00 - 11:00 → DIW</div>';
                    echo '<div class="hora">☕ 11:00 - 11:30 → RECREO</div>';
                    echo '<div class="hora">⏰ 11:30 - 12:30 → DIW</div>';
                    echo '<div class="hora">⏰ 12:30 - 13:30 → PI</div>';
                    echo '<div class="hora">⏰ 13:30 - 14:30 → PI</div>';

                    break;


                case "martes":

                    echo "<h2>🍆 Horario Martes 🐱</h2>";

                    echo '<div class="hora">⏰ 08:00 - 09:00 → DWES</div>';
                    echo '<div class="hora">⏰ 09:00 - 10:00 → DWES</div>';
                    echo '<div class="hora">⏰ 10:00 - 11:00 → IPE II</div>';
                    echo '<div class="hora">☕ 11:00 - 11:30 → RECREO</div>';
                    echo '<div class="hora">⏰ 11:30 - 12:30 → IPE II</div>';
                    echo '<div class="hora">⏰ 12:30 - 13:30 → DWEC</div>';
                    echo '<div class="hora">⏰ 13:30 - 14:30 → DWEC</div>';

                    break;


                case "miercoles":

                    echo "<h2>🐱 Horario Miércoles 🍆</h2>";

                    echo '<div class="hora">⏰ 08:00 - 09:00 → DAW</div>';
                    echo '<div class="hora">⏰ 09:00 - 10:00 → DAW</div>';
                    echo '<div class="hora">⏰ 10:00 - 11:00 → INGLÉS</div>';
                    echo '<div class="hora">☕ 11:00 - 11:30 → RECREO</div>';
                    echo '<div class="hora">⏰ 11:30 - 12:30 → INGLÉS</div>';
                    echo '<div class="hora">⏰ 12:30 - 13:30 → DWEC</div>';
                    echo '<div class="hora">⏰ 13:30 - 14:30 → DWEC</div>';

                    break;


                case "jueves":

                    echo "<h2>🍆 Horario Jueves 🐱</h2>";

                    echo '<div class="hora">⏰ 08:00 - 09:00 → Optativa</div>';
                    echo '<div class="hora">⏰ 09:00 - 10:00 → DWES</div>';
                    echo '<div class="hora">⏰ 10:00 - 11:00 → DWES</div>';
                    echo '<div class="hora">☕ 11:00 - 11:30 → RECREO</div>';
                    echo '<div class="hora">⏰ 11:30 - 12:30 → DIW</div>';
                    echo '<div class="hora">⏰ 12:30 - 13:30 → DIW</div>';
                    echo '<div class="hora">⏰ 13:30 - 14:30 → DIW</div>';

                    break;


                case "viernes":

                    echo "<h2>🐱 Horario Viernes 🍆</h2>";

                    echo '<div class="hora">⏰ 08:00 - 09:00 → Optativa</div>';
                    echo '<div class="hora">⏰ 09:00 - 10:00 → Optativa</div>';
                    echo '<div class="hora">⏰ 10:00 - 11:00 → DWEC</div>';
                    echo '<div class="hora">☕ 11:00 - 11:30 → RECREO</div>';
                    echo '<div class="hora">⏰ 11:30 - 12:30 → DWEC</div>';
                    echo '<div class="hora">⏰ 12:30 - 13:30 → DWES</div>';
                    echo '<div class="hora">⏰ 13:30 - 14:30 → IPE II</div>';

                    break;

            }

            echo '</div>';

        }

        ?>


        <div class="pie">
            🐾 Hecho con PHP, CSS, gatitos y demasiadas berenjenas 🍆
        </div>

    </div>

</body>
</html>
```
