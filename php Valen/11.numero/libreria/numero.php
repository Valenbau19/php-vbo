<?php
function numero($pnumeroUno, $pnumeroDos) {
    $numeroUno = $pnumeroUno;
    $numeroDos = $pnumeroDos;

        if ($numeroUno == $numeroDos) {
            return("son iguales");
        }

        else
            if ($numeroUno > $numeroDos) {
                return("Numero uno es mayor");
            }
            else {
                return("Numero dos es mayor");
            }
}
?>