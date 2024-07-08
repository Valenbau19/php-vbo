<?php
include('libreria/notas.php');
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
        var_dump(porcentaje(4.3, 0.3));
        var_dump(porcentaje(3.5, 0.3));
        var_dump(porcentaje(5.0, 0.4));
        var_dump("resultado suma notas: " . resultado());

        ?>
</body>
</html>