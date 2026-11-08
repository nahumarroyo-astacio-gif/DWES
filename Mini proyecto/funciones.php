<?php
function coincideNombre($nombre, $busqueda){
  
    return strtolower($nombre) == strtolower($busqueda);
}

function filtrarProducto($productos){

$resultado=[];

foreach ($productos as $producto) {
    if ($producto["stock"]>0){
        $resultado[]=$producto;
    }
}
    return $resultado;
}

function valorInventario($productos){

    $total = 0;

    for ($i=0; $i < count($productos); $i++) { 
        $total += $productos[$i]["precio"] * $productos[$i]["stock"];
    }
  
    return $total;
}

function fechaValida($caducidad){

    $hoy = date("Y-m-d");

    return $caducidad >= $hoy;
}
    
?>