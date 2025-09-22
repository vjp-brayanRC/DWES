<!-- Reescribe el ejercicio anterior haciendo uso sólo de while -->
<?php
$base = 2;
$exponente = 3;
$resultado = $base;
$i = 1;
while ($i < $exponente) { 
    $resultado = $resultado * $base;
    $i++;
}
echo "$base elevado a $exponente es $resultado";
?>