<?php
function areas($pfiguras,$pbase,$paltura){
    if ($pfiguras == "cuadrado"){
        $lado1=$pbase;
        $lado2=$paltura;
        $cuadrado=$lado1*$lado2;
        return $cuadrado;
    }
    else if($pfiguras=="triangulo"){
        $base=$pbase;
        $altura=$paltura;
        $triangulo=(($base*$altura)/2);
        return $triangulo;
    }
    else if($pfiguras=="rectangulo"){
        $base=$pbase;
        $altura=$paltura;
        $rectangulo=$base*$altura;
        return $rectangulo;
    }
    
}

?>
