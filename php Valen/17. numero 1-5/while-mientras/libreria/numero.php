<?php
function numeroo($pcontar, $pnumero) {
    $contar = $pcontar;
    $numero = $pnumero;
    $salida="";
    while ($contar < $numero) {
        $contar++;
        if ($contar % 2 == 0) {
            $salida .= $contar . " Es par\n" . "<br>";
        } else {
            $salida .= $contar . " Es impar\n" . "<br>";
        }
    }
    return $salida;

}
?>