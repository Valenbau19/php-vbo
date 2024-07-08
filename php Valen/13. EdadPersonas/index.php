<?php
include('libreria/edadPersonas.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/parametro.js"></script>
</head>
<body>
    <?php
        var_dump(edadPersona1(2024,2009));
        var_dump(edadPersona2(2024,1999));
        var_dump(edadPersona3(2024,1965));
        var_dump(promedioEdad(15,25,59));
    ?>
</body>
</html>