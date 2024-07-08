<?php
include('libreria/areas.php');
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
       var_dump("Cuadrado: "." ". areas("cuadrado" , 8,5));
       var_dump("Triangulo : ". "  ". areas("triangulo", 3, 6));
       var_dump("Rectangulo:"." " . areas("rectangulo", 4, 9));
       
    ?>
</body>
</html>