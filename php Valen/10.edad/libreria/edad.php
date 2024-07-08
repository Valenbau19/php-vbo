<?php
function edad($panoNac,$panoAct) {
    $anoNac=$panoNac;
    $anoAct=$panoAct;

    $edad=$anoAct - $anoNac;

    if ($edad>17){
        return("Mayor de edad; ". $edad);
    }

    else{
        return("Menor de edad; " . $edad);
    }
}
?>
