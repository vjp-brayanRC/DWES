<!-- Muestra dentro de una tabla HTML la tabla de multiplicar
del numero que reciba como parámetro. Utiliza 
<thead> con sus respectivos <th> y <tbody> para dibujar la tabla. Por ejemplo: -->
        
    <?php
        $num = $_GET['numero'] ?? 1;
        echo "<table border='1'>";
        echo "<thead><tr><th colspan='2'>Tabla de multiplicar del $num</th></tr></thead>";
        echo "<tbody>";
        for ($i = 0; $i <= 10; $i++) {
            $resultado = $num * $i;
            echo "<tr><td>$num x $i</td><td>$resultado</td></tr>";
        }
        echo "</tbody>";
        echo "</table>";
    ?>
      
            