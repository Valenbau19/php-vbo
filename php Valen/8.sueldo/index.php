<?php
include('libreria/sueldo.php')
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
    var_dump("el pago total es: ". pago(30,60000));
   ?>
</body>
</html>