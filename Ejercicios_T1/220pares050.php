<!-- Escribe un programa que muestre los 
números pares del 0 al 50 (dentro de una lista desordenada). -->

<?php
    echo "<ul>";
    for ($i=0; $i <= 50; $i+=2) { 
        echo "<li>$i</li>";
    }
    echo "</ul>";
?>