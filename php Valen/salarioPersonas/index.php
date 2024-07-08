<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<?php

$nominaRegistros = [
    ["Id", 1077226532, "Nombre", "Valentina", "Apellidos", "Bautista Oviedo", "cargo", "Ingeniera", "valorDia", 60000, "diasTrabajados", 30],
    ["Id", 1077908671, "Nombre", "Anibal", "Apellidos", "Alvarado Andrade", "cargo", "Empleado", "valorDia", 55000, "diasTrabajados", 15],
    ["Id", 55179155, "Nombre", "Juanita", "Apellidos", "Carvajal Ruiz", "cargo", "Diseñadora", "valorDia", 70000, "diasTrabajados", 25],
    ["Id", 12135678, "Nombre", "Andres", "Apellidos", "Moreno Collazos", "cargo", "Programador", "valorDia", 85000, "diasTrabajados", 30],
    ["Id", 36579982, "Nombre", "Emilio", "Apellidos", "Andrade Perez", "cargo", "Ingeniero ambiental", "valorDia", 50000, "diasTrabajados", 8],
    ["Id", 1042744985, "Nombre", "Andrez", "Apellidos", "Suaza Bustos", "cargo", "Programador y Diseñador", "valorDia", 75000, "diasTrabajados", 20],
    ["Id", 1085991670, "Nombre", "Alexander", "Apellidos", "Diaz Cabrera", "cargo", "Enfermero", "valorDia", 50000, "diasTrabajados", 10],
    ["Id", 1094782224, "Nombre", "Ronald", "Apellidos", "Lugo Diaz", "cargo", "Doctor", "valorDia", 90000, "diasTrabajados", 29],
    ["Id", 1044601183, "Nombre", "Alejandro", "Apellidos", "Bermudez Arias", "cargo", "Deportista", "valorDia", 95000, "diasTrabajados", 30],
    ["Id", 1551836771, "Nombre", "Violeta", "Apellidos", "Rojas Poloche", "cargo", "Chet", "valorDia", 65000, "diasTrabajados", 15]
];

foreach ($nominaRegistros as &$registro) {
    $registro[] = $registro[9] * $registro[11];
}

foreach ($nominaRegistros as &$registro) {
    $registro[] = $registro[12] * 0.12;
}

foreach ($nominaRegistros as &$registro) {
    $registro[] = $registro[12] * 0.16;
}

foreach ($nominaRegistros as &$registro) {
    $registro[] = $registro[12] * 0.052;
}

foreach ($nominaRegistros as &$registro) {
    $salarioMinimo = 1600000;
    $salarioTrans = $registro[12];
    if ($salarioTrans <= 2 * $salarioMinimo) {
        $subTransporte = 245000;
    } else {
        $subTransporte = 0;
    }
    $registro[] = $subTransporte;
}

foreach ($nominaRegistros as &$registro) {
    $salarioMinimo = 1600000;
    $salarioRetencion = $registro[12];
    if ($salarioRetencion <= 6 * $salarioMinimo) {
        $retencion = $registro[12] * 0.02;
    } elseif ($salarioRetencion <= 8 * $salarioMinimo) {
        $retencion = $registro[12] * 0.04;
    } elseif ($salarioRetencion <= 12 * $salarioMinimo) {
        $retencion = $registro[12] * 0.08;
    }
    $registro[] = $retencion;
}

foreach ($nominaRegistros as &$registro) {
    $registro[] = $registro[12] + $registro[13] + $registro[14];
}

foreach ($nominaRegistros as &$registro) {
    $registro[] = $registro[16] - $registro[12];
}

$nominaPersonas = [];
foreach ($nominaRegistros as $registro) {
    $nominaPersonas[] = ["Nombre" => $registro[3], "salud" => $registro[13], "pension" => $registro[14], "arl" => $registro[15], "totalPago" => $registro[17]];
}

foreach ($nominaPersonas as $persona) {
    foreach ($persona as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }
    echo "<br>";
}

?>

</body>
</html>