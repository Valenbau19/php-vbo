<?php
function numeroo($pnumero) {
    $numero = $pnumero;
    $resultado = "";
    for ($contar = 1; $contar <= $numero; $contar++) {
        $resultado .= $contar . " ";
    }
    return $resultado;
}
?>