<?php

function salario($pdias, $pvdia) {
    $dias = $pdias;
    $vdia = $pvdia;
    $totalSalario = $dias * $vdia;
    return $totalSalario;
}

function subTrans($pdias, $pvdia) {
    $salarioMinimo = 1600000;
    $salarioTrans = salario($pdias, $pvdia);
    if ($salarioTrans <= 2 * $salarioMinimo) {
        $subTransporte = 114000;
    } else {
        $subTransporte = 0;
    }
    return $subTransporte;
}

function salud($pdias, $pvdia) {
    $pagoSalud = salario($pdias, $pvdia) * 0.12;
    return $pagoSalud;
}

function pension($pdias, $pvdia) {
    $pagoPension = salario($pdias, $pvdia) * 0.16;
    return $pagoPension;
}

function arl($pdias, $pvdia) {
    $pagoArl = salario($pdias, $pvdia) * 0.052;
    return $pagoArl;
}

function deducible($pdias, $pvdia) {
    $pagoDeducible = salud($pdias, $pvdia) + pension($pdias, $pvdia) + arl($pdias, $pvdia);
    return $pagoDeducible;
}

function pagoTotal($pdias, $pvdia) {
    $pagoSueldo = salario($pdias, $pvdia) - deducible($pdias, $pvdia) + subTrans($pdias, $pvdia);
    return $pagoSueldo;
}

?>