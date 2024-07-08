<?php
function pago($pdiasTra, $pvalorDia) {
        
        $diasTra = $pdiasTra;
        $valorDia = $pvalorDia;

        $sueldo=$diasTra * $valorDia;
        $salud=$sueldo * 0.12;
        $pension=$sueldo * 0.16;
        $arl =$sueldo * 0.052;

        $descu=$pension+$arl;
        $pagototal=$descu;
        return $pagototal ;
}
?>