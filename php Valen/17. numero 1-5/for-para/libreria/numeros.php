<?php
function numeros($pnumero) {
    $numero = $pnumero;
    $salida = "";
    for ($contar = 1; $contar <= $numero; $contar++) {
        if ($contar % 2 == 0) {
            $salida .= $contar . " Es par\n" . "<br>";
        } else {
            $salida .= $contar . " Es impar\n" . "<br>";
        }
    }
    return $salida;
}
?>
