<?php

function multiplicar($pnum) {
        $num=$pnum;

        for ($cont=1; $cont<=$num; $cont++){
             $multiplicar = $num * $cont;
             echo ($num . "*" . $cont . "=" . $multiplicar . "<br>");
        }
}
?>