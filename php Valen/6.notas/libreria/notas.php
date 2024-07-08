
<?php


function porcentaje($pnota, $porcentaje) {
    $nota = $pnota;
    $porcentaje = $porcentaje;

    $resultado = $nota * $porcentaje;

    return $resultado;
}

function resultado() {
    $nota1 = porcentaje(4.3, 0.3);
    $nota2 = porcentaje(3.5, 0.3);
    $nota3 = porcentaje(5.0, 0.4);

    $suma = $nota1 + $nota2 + $nota3;
    return $suma;
}

?>


