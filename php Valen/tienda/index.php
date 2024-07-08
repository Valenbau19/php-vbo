<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$tienda = [
    array("Arroz", "granos", "gramos", 1000, 2450),
    array("Papa", "Fruver", "gramos", 500, 1000),
    array("Mora", "Fruver", "gramos", 500, 1500),
    array("Trucha", "Carnes", "gramos", 1000, 9000),
    array("Pollo Entero", "Carnes", "gramos", 500, 4500)
];

$numeroProducto = array("Res", "Carnes", "gramos", 1000, 7500);
array_push($tienda, $numeroProducto);
$numeroRegistro = count($tienda);

$listaBusqueda = [];
foreach ($tienda as $producto) {
    if ($producto[1] == 'Fruver') {
        array_push($listaBusqueda, $producto);
    }
}

foreach ($listaBusqueda as $producto) {
    foreach ($producto as $value) {
        echo $value . "<br>";
    }
    echo "<br>";
}

?>
</body>
</html>