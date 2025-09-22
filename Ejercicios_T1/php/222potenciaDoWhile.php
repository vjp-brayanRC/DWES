 <!-- Reescribe el ejercicio anterior haciendo uso sólo de do-while  -->
<?php
$base = 2;
$exponente = 3;
$resultado = $base;
$i = 1;
do { 
    $resultado = $resultado * $base;
    $i++;
} while ($i < $exponente);
echo "$base elevado a $exponente es $resultado";
?>