<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function generarMatrizBasica($multiplicador) {
    $matriz = [];
    $contador = 1;
    for ($contar = 1; $contar <= 5; $contar++) {
        $matriz[$contar - 1] = [];
        for ($numero = 1; $numero <= 5; $numero++) {
            $matriz[$contar - 1][$numero - 1] = $contador * $multiplicador;
            $contador++;
        }
    }
    return $matriz;
}

function calcularSumaParesImpares($matriz) {
    $sumaPares = 0;
    $sumaImpares = 0;

    foreach ($matriz as $fila) {
        foreach ($fila as $numero) {
            if ($numero % 2 === 0) {
                $sumaPares += $numero;
            } else {
                $sumaImpares += $numero;
            }
        }
    }

    return ['sumaPares' => $sumaPares, 'sumaImpares' => $sumaImpares];
}

$matriz5 = generarMatrizBasica(5);
echo "Matriz de la tabla de multiplicar del 5:<br>";
foreach ($matriz5 as $fila) {
    echo implode(" ", $fila) . "<br>";
}

$sumaParesImpares5 = calcularSumaParesImpares($matriz5);
echo "Suma de pares: " . $sumaParesImpares5['sumaPares'] . "<br>";
echo "Suma de impares: " . $sumaParesImpares5['sumaImpares'] . "<br>";

$matriz9 = generarMatrizBasica(9);
echo "Matriz de la tabla de multiplicar del 9:<br>";
foreach ($matriz9 as $fila) {
    echo implode(" ", $fila) . "<br>";
}

$sumaParesImpares9 = calcularSumaParesImpares($matriz9);
echo "Suma de pares: " . $sumaParesImpares9['sumaPares'] . "<br>";
echo "Suma de impares: " . $sumaParesImpares9['sumaImpares'] . "<br>";
?>

</body>
</html>