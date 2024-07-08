<?php
function numeross($pnumInicial, $pnumFinal, $pcontPar, $pcontImpar, $pcontar) {
    $numInicial = $pnumInicial;
    $numFinal = $pnumFinal;
    $contPar = $pcontPar;
    $contImpar = $pcontImpar;
    $contar = $pcontar;

    for ($numInicial; $numInicial <= $numFinal; $numInicial++) {
        $contar = 1;
        for ($contar; $contar <= 5; $contar++) {
             $resultado = $numInicial * $contar;

            if ($resultado % 2 == 0) {
                echo $numInicial . "x" . $contar . "=" . $resultado . "  Buzz<br>";
                $contPar++;
            } else {
                echo $numInicial . "x" . $contar . "=" . $resultado . "  Bazz<br>";
                $contImpar++;
            }
        }
    }

    echo "La cantidad de pares es: " . $contPar . "<br>";
    echo "La cantidad de Impares es: " . $contImpar . "<br>";
}
?>