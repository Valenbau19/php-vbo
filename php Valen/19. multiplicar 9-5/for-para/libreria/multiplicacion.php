<?php

function multiplicar($pcontar, $pnum) {
    $contar = $pcontar;
    $num = $pnum;

    for ($contar = 1; $contar <= 5; $contar++) {
        $multi = $num * $contar;
        if ($multi % 2 == 0) {
            echo $multi . " Es par <br>";
        } else {
            echo $multi . " Es impar <br>";
        }
    }
}

?>