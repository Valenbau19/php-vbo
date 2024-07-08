<?php
function multiplicar($pnum, $pcont) {
    $num = $pnum;
    $cont = $pcont;

    while ($cont < $num) {
        $cont = $cont + 1;
        $multiplicar = $cont * $num;

        echo $num . "x" . $cont . "=" . $multiplicar . "<br>";
    }
}
?>