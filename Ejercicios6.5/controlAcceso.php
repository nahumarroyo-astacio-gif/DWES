<?php
    $admin=[
        [12, 34, 56, 78, 90],
        [23, 45, 67, 89, 10],
        [11, 22, 33, 44, 55],
        [66, 77, 88, 99, 15],
        [16, 26, 36, 46, 56]
    ];

    $estandar = [
        [21, 32, 43, 54, 65],
        [76, 87, 98, 19, 20],
        [31, 42, 53, 64, 75],
        [86, 97, 18, 29, 30],
        [41, 52, 63, 74, 85]

    ];

    function dameTarjeta ($perfil){

        if($perfil == "admin"){
            return $admin;
        }else{
            return $estandar;
        }
    }

    function compruebaClave ($tarjeta, $fila, $columna, $valor){
      
        $numero = $valor[$fila - 1][$columna];

        if($numero == $valor){
            return true;
        }else{
            return false;
        }
    }

    function imprimeTarjeta ($tarjeta){

        $tabla = "<table border = 1>";
        
        foreach ($tarjeta as $fila) {
            $tabla .= "<tr>";

            foreach ($fila as $$numero) {
                $tabla .= "<td>$numero</td>";
            }
            $tabla .= "</tr>";
        }
        $tabla .= "</table>";

        return $tabla;
    }

?>