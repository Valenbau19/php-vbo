<?php

function numeross($pcontar, $pnumero) {
    $contar = $pcontar;
    $numero = $pnumero;
    $resultado = "";
    while ($contar < $numero) {
        $contar++;
        if ($contar % 2 == 0) {
            $resultado .= $contar . " ";
        } else {
            $resultado .= $contar . " ";
        }
    }
    return $resultado;
}
?>