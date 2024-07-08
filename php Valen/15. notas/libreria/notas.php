
<?php
function notas($pnota1,$pnota2,$pnota3){
    $porcentaje1= calcularPorcentaje($pnota1, 20);
    $porcentaje2 = calcularPorcentaje($pnota2, 35);
    $porcentaje3 = calcularPorcentaje($pnota3, 45);
    $suma = $porcentaje1 + $porcentaje2 + $porcentaje3;
    
      if ($suma>4.5){
        return("Nota Supeior");
        }
        else {
           if($suma<=4.5 && $suma>3.5){
            return("Nota buena");
         }
         else{
            if($suma<=3.5 && $suma>=3){
                return("Nota media");
            }
            else {
                if($suma<3){
                    return("Nota mala");
                }
            }
        }
      }
    }
function calcularPorcentaje($nota, $porcentaje) {
        return ($nota * $porcentaje) / 100;
    }
?>