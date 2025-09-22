<!-- A partir de una base y exponente, mediante la acumulación 
de productos, calcula la potencia utilizando la instrucción for. -->

<?php
$base = 2;
$exponente = 3;
$resultado = $base;
for ($i=1; $i < $exponente; $i++) { 
    $resultado = $resultado * $base;
}
echo "$base elevado a $exponente es $resultado";
?>