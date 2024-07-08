<?php
$numeroUno;
$numeroDos;

function suma($pnumeroUno, $pnumeroDos) {
    global $numeroUno, $numeroDos;
    $numeroUno = $pnumeroUno;
    $numeroDos = $pnumeroDos;

    $sumar = $numeroUno + $numeroDos;
    return $sumar;
}

function resta($pnumeroUno, $pnumeroDos) {
    global $numeroUno, $numeroDos;
    $numeroUno = $pnumeroUno;
    $numeroDos = $pnumeroDos;

    $restar = $numeroUno - $numeroDos;
    return $restar;
}

function multiplicacion($pnumeroUno, $pnumeroDos) {
    global $numeroUno, $numeroDos;
    $numeroUno = $pnumeroUno;
    $numeroDos = $pnumeroDos;

    $multiplicar = $numeroUno * $numeroDos;
    return $multiplicar;
}

function operacion($poperador, $pnumeroUno, $pnumeroDos) {
    global $numeroUno, $numeroDos;
    $operador = $poperador;
    $numeroUno = $pnumeroUno;
    $numeroDos = $pnumeroDos;

    if ($operador == "suma") {
        $operacionResultado = suma($numeroUno, $numeroDos);
    } elseif ($operador == "resta") {
        $operacionResultado = resta($numeroUno, $numeroDos);
    } elseif ($operador == "multiplicacion") {
        $operacionResultado = multiplicacion($numeroUno, $numeroDos);
    } else {
        $operacionResultado = "No se puede operar";
    }
    return $operacionResultado;
}
?>
