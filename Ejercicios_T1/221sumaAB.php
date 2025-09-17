<!-- A partir del anterior, refactorizar para que funcione con inicio y fin -->

<?php
  $inicio = 4;
  $fin = 10;
  $suma = 0;
  for ($i = $inicio; $i <= $fin; $i++) {
    $suma += $i;
  }
  echo "La suma de los números del " . $inicio . " al " . $fin . " es: " . $suma;