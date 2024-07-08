<?php 
function multiplicar($pcont, $pnum) {
  $cont = $pcont;
  $num = $pnum;

  while ($cont < $num) {
      $cont = $cont + 1;
      $result = $cont * 9;
      if ($result % 2 == 0) {
          echo $result . " Es par <br>";
      } else {
          echo $result . " Es impar <br>";
      }
  }
}
?>
