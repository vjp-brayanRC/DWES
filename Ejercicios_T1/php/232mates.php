 <!-- A partir del ejercicio 230, genera un array 
 aleatorio de 33 elementos con números 
 comprendidos entre el 0 y 100 y calcula:
El mayor
El menor
La media -->

<?php
$num = [];
for($i = 0; $i < 33; $i++){
    $num[] = rand(0, 100);
}
sort($num);

echo "<ul>";
foreach($num as $indice => $valor){
    echo "<li>$indice => $valor</li>";
}
echo "</ul>";

//EL mayor
$mayor =max($num);
//El menor
$menor = min($num);
//LAmedia
$media = array_sum($num) / count($num);

echo "<p>Mayor: $mayor</p>";
echo "<p>Menor: $menor</p>";
echo "<p>Media: $media</p>";

?>