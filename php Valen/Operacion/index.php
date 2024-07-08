<?php
include('libreria/operacion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacion</title>
</head>
<body>
    <?php
    echo "Suma: " . operacion("suma", 9, 8) . "<br>";
    echo "Resta: " . operacion("resta", 9, 8) . "<br>";
    echo "Multiplicacion: " . operacion("multiplicacion", 9, 8) . "<br>";
    echo "Division: " . operacion("division", 9, 5) . "<br>";
    ?>
</body>
</html>