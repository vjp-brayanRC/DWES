<!-- A partir del anterior, 
refactorizar para que funcione con inicio y fin. -->

<?php
    $inicio = 8;
    $fin = 150;

    echo "<ul>";
    for ($i=$inicio; $i <= $fin; $i+=2) { 
        echo "<li>$i</li>";
    }
    echo "</ul>";