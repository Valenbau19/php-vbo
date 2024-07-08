<?php

function verificarEdad($edad) {
    if ($edad >= 18) {
        return "Mayor de edad: " . $edad;
    } else {
        return "Menor de edad: " . $edad;
    }
}
?>