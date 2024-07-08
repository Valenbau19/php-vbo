<?php

function edadPersona1($panioAct, $panioNac1){
    $anioAct= $panioAct;
    $anioNac1= $panioNac1;
    $edad1 = $anioAct - $anioNac1;
     if ($edad1>17){
         return($edad1 . " Es mayor de edad ");
     }
     else{
         return($edad1 . " Es menor de edad ");
     }
 }
 function edadPersona2($panioAct, $panioNac2){
     $anioAct= $panioAct;
     $anioNac2= $panioNac2;
     $edad2 = $anioAct - $anioNac2;
 
     if ($edad2>17){
         return($edad2 . " Es mayor de edad ");
     }
     else{
         return($edad2 . " Es menor de edad ");
     }
 
 }
 function edadPersona3($panioAct,$panioNac3){
     $anioAct= $panioAct;
     $anioNac3= $panioNac3;
     $edad3 = $anioAct - $anioNac3;
 
     if ($edad3>17){
         return($edad3 . " Es mayor de edad ");
     }
     else{
         return($edad3 . " Es menor de edad ");
     }
 }

 function promedios($pedad1,$pedad2,$pedad3){
    return($pedad1+$pedad3)/3;
 }

 function promedioEdad($pedad1,$pedad2,$pedad3){
       $promedio=promedios($pedad1,$pedad2,$pedad3);
    if ($promedio>17){
         return  ( $promedio . " Cumple la mayoria de edad ");  
    }

    else{
         return ($promedio . " No cumple la moyoria de edad " ); ;
     }
}
?>