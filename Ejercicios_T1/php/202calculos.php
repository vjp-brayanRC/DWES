<!-- Escribe un programa que utilice las variables $x y $y. Asígnales los valores 
166 y 999 respectivamente. A continuación, muestra por pantalla el valor de cada variable, 
la suma, la resta, la división y la multiplicación. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Operaciones</title>
</head>
<body>
    <?php
        $x = 166;
        $y = 999;

        echo "El valor de x es: $x <br>";
        echo "El valor de y es: $y <br>";
        echo "La suma de x e y es: " . ($x + $y) . "<br>";
        echo "La resta de x e y es: " . ($x - $y) . "<br>";
        echo "La multiplicación de x e y es: " . ($x * $y) . "<br>";
        echo "La división de x e y es: " . ($x / $y) . "<br>";
        ?>
</body>
</html>