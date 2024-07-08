<?php
function numeross($pnumInicial, $pnumFinal, $pcontPar, $pcontImpar, $pcontar) {
    $numInicial = $pnumInicial;
    $numFinal = $pnumFinal;
    $contPar = $pcontPar;
    $contImpar = $pcontImpar;
    $contar = $pcontar;

    while ($numInicial <= $numFinal) {
        $contar = 1;
        while ($contar <= 5) {
            $resultado = $numInicial * $contar;

            if ($resultado % 2 == 0) {
                echo $numInicial . "x" . $contar . "=" . $resultado . "  Buzz<br>";
                $contPar = $contPar + 1;
            } else {
                echo $numInicial . "x" . $contar . "=" . $resultado . "  Bazz<br>";
                $contImpar = $contImpar + 1;
            }
            $contar++;
        }
        $numInicial++;
    }

    echo "La cantidad de pares es:" . $contPar . "<br>";
    echo "La cantidad de Impares es:" . $contImpar . "<br>";
}
?>