<!-- 230aleatorios50.php: Rellena un array con 50
 números aleatorios comprendidos entre el 0 y el 99, 
 y luego muéstralo en una lista desordenada. 
 Para crear un número aleatorio, utiliza la función
 rand(inicio, fin). Por ejemplo: -->
 
<?php
$num = [];
for($i = 0; $i < 50; $i++){
    $num[] = rand(0, 99);
}
sort($num);

echo "<ul>";
foreach($num as $indice => $valor){
    echo "<li>$indice => $valor</li>";
}
echo "</ul>";

?>