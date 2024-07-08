
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$matriz = [
    [1, 0, 0, 0, 5],
    [0, 2, 0, 4, 0],
    [0, 0, 3, 0, 0],
    [0, 2, 0, 4, 0],
    [1, 0, 0, 0, 5]
];

function imprimirX($matriz) {
    $tamano = count($matriz);

    for ($i = 0; $i < $tamano; $i++) {
        for ($j = 0; $j < $tamano; $j++) {
            if ($i === $j || $i + $j === $tamano - 1) {
                echo $matriz[$i][$j] . ' ';
            } else {
                echo '&nbsp;&nbsp;'; // Espacios en blanco para mantener la estructura
            }
        }
        echo "<br>"; // Salto de línea al final de cada fila
    }
}

imprimirX($matriz);
?>


</body>
</html>