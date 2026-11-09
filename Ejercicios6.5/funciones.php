<?php
function combinacion ($num1, $num2, $num3, $num4, $num5, $num6, $serie){
    
$combinacion = [];

if (empty($num1)) {
    $num1 = rand(1, 49);
}
if (empty($num2)) {
    $num2 = rand(1, 49);
}
if (empty($num3)) {
    $num3 = rand(1, 49);
}
if (empty($num4)) {
    $num4 = rand(1, 49);
}
if (empty($num5)) {
    $num5 = rand(1, 49);
}
if (empty($num6)) {
    $num6 = rand(1, 49);
}
if (empty($serie)) {
    $serie = rand(1, 999);
}

$combinacion = [$num1, $num2, $num3, $num4 ,$num5, $num6, $serie];

return $combinacion;
}

function imprimeApuesta ($array, $texto){

    $tabla = "<table border = '1'";
  
    if(empty($texto)){
        $texto="Combinación generada para la primitiva";
    }

    $tabla .= "<tr><th colspan = '7'>$texto</th></tr>";
    $tabla .= "<tr>";

    foreach ($array as $numero) {
        $tabla .= "<td>$numero</td>";
    }

    $tabla .= "</tr>";
    $tabla .= "</table>";
    
    return $tabla;

}

?>