<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>

    <h1>Lotería Primitiva</h1>
    <form method="post">
        <h2>Elige tus números</h2>
        <table border="1">
            <tr>
                <td><input type="checkbox" name="n1" value="1">1</td>
                <td><input type="checkbox" name="n2" value="2">2</td>
                <td><input type="checkbox" name="n3" value="3">3</td>
                <td><input type="checkbox" name="n4" value="4">4</td>
                <td><input type="checkbox" name="n5" value="5">5</td>
                <td><input type="checkbox" name="n6" value="6">6</td>
                <td><input type="checkbox" name="n7" value="7">7</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="n8" value="8">8</td>
                <td><input type="checkbox" name="n9" value="9">9</td>
                <td><input type="checkbox" name="n10" value="10">10</td>
                <td><input type="checkbox" name="n11" value="11">11</td>
                <td><input type="checkbox" name="n12" value="12">12</td>
                <td><input type="checkbox" name="n13" value="13">13</td>
                <td><input type="checkbox" name="n14" value="14">14</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="n15" value="15">15</td>
                <td><input type="checkbox" name="n16" value="16">16</td>
                <td><input type="checkbox" name="n17" value="17">17</td>
                <td><input type="checkbox" name="n18" value="18">18</td>
                <td><input type="checkbox" name="n19" value="19">19</td>
                <td><input type="checkbox" name="n20" value="20">20</td>
                <td><input type="checkbox" name="n21" value="21">21</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="n22" value="22">22</td>
                <td><input type="checkbox" name="n23" value="23">23</td>
                <td><input type="checkbox" name="n24" value="24">24</td>
                <td><input type="checkbox" name="n25" value="25">25</td>
                <td><input type="checkbox" name="n26" value="26">26</td>
                <td><input type="checkbox" name="n27" value="27">27</td>
                <td><input type="checkbox" name="n28" value="28">28</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="n29" value="29">29</td>
                <td><input type="checkbox" name="n30" value="30">30</td>
                <td><input type="checkbox" name="n31" value="31">31</td>
                <td><input type="checkbox" name="n32" value="32">32</td>
                <td><input type="checkbox" name="n33" value="33">33</td>
                <td><input type="checkbox" name="n34" value="34">34</td>
                <td><input type="checkbox" name="n35" value="35">35</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="n36" value="36">36</td>
                <td><input type="checkbox" name="n37" value="37">37</td>
                <td><input type="checkbox" name="n38" value="38">38</td>
                <td><input type="checkbox" name="n39" value="39">39</td>
                <td><input type="checkbox" name="n40" value="40">40</td>
                <td><input type="checkbox" name="n41" value="41">41</td>
                <td><input type="checkbox" name="n42" value="42">42</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="n43" value="43">43</td>
                <td><input type="checkbox" name="n44" value="44">44</td>
                <td><input type="checkbox" name="n45" value="45">45</td>
                <td><input type="checkbox" name="n46" value="46">46</td>
                <td><input type="checkbox" name="n47" value="47">47</td>
                <td><input type="checkbox" name="n48" value="48">48</td>
                <td><input type="checkbox" name="n49" value="49">49</td>
            </tr>
        </table> <br> Número de serie: <input type="text" name="serie" required> <br><br> <input type="submit"
            value="Jugar">
    </form>

    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $ganadores =array();

        while(count($ganadores) < 6){
            $numero = rand(1, 49);

            if(!in_array($numero, $ganadores)){
                $ganadores[] = $numero;
            }
        }

        $serieGanadora = rand(1,999);

        $seleccionados = 0;

         for ($i = 1; $i <= 49; $i++) {

            if (isset($_POST["n" . $i])) {
                $seleccionados++;
            }
        }


        $aciertos = 0;

        for ($i = 1; $i <= 49; $i++) {

            if (isset($_POST["n" . $i])) {

                if (in_array($i, $ganadores)) {
                    $aciertos++;
                }
            }
        }

        $serieAcertada = false;

        if($_POST["serie"] == $serieGanadora){
            $serieAcertada = true;
        }


        $dinero = 0;
        if($aciertos < 4){
            $dinero = 0;
        } elseif ($aciertos == 4){
            $dinero = 1;
        }elseif ($aciertos == 5){
            $dinero = 30;
        }elseif ($aciertos == 6){
            $dinero = 100;
        }

        if($serieAcertada){
            $dinero += 500;
        }

       

    }
?>


</body>

</html>