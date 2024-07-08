<?php

function areasCua($plado1, $plado2, $plado3) {
    
        $lado1 = $plado1;
        $lado2 = $plado2;
        $lado3 = $plado3;

        $cuad1 = $lado1 * $lado1;
        $cuad2 = $lado2 * $lado2;
        $cuad3 = $lado3 * $lado3;

        if ($cuad1 == $cuad2 && $cuad2 == $cuad3 && $cuad3 == $cuad1) {
            return("son iguales los cuadrados: ");
        } else if ($cuad1 > $cuad2 && $cuad1 > $cuad3) {
            return("Cuadro 1 es mayor: " . $cuad1);
        }
        else if ($cuad2 > $cuad1 && $cuad2 > $cuad3) {
            return("Cuadro 2 es mayor: " . $cuad2);
        }
        else{
            return("Cuadro 3 es mayor: " . $cuad3);
        }


}
?>