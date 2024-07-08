<?php
include('libreria/salario.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
        $valorDia=20000;
        $dias=30;
        $salarioPersona=salario($dias,$valorDia);
        $subTransPersona=subTrans($dias,$valorDia);
        $totalPagarPersona=pagoTotal($dias,$valorDia);
        $pagoSalud=salud($dias,$valorDia);
        $pagoPension=pension($dias,$valorDia);
        $pagoArl=arl($dias,$valorDia);
        

        var_dump("Salario Persona= " . $salarioPersona);
        var_dump("Subsidio Transpersona= " . $subTransPersona);
        var_dump("Salud= " . $pagoSalud);
        var_dump("Pension= " . $pagoPension);
        var_dump("Arl= " . $pagoArl);
        var_dump("Total Pagar Persona= " . $totalPagarPersona);
   ?>
</body>
</html>