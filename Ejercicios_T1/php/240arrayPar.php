<!-- Crea las siguientes funciones:
Una función que averigüe si un número es par: esPar(int $num): bool
Una función que devuelva un array de tamaño $tam con números aleatorios comprendido entre $min y $max : 
arrayAleatorio(int $tam, int $min, int $max) : array
Una función que reciba un $array por referencia y devuelva la cantidad de números pares que hay almacenados: 
arrayPares(array &$array): int -->

<?php
// Función que averigua si un número es par
function esPar(int $num):bool {
    return $num % 2 == 0;
    
}

// Función que devuelve un array de tamaño $tam con números aleatorios entre $min y $max
function arrayAleatorio(int $tam, int $min, int $max): array {
    $array = [];
    for ($i = 0; $i < $tam; $i++) {
        $array[] = rand($min, $max);
    }
    return $array;
}

// Función que recibe un array por referencia y devuelve la cantidad de números pares
function arrayPares(array &$array): int {
    $contador = 0;
    foreach ($array as $valor) {
        if (esPar($valor)) {
            $contador++;
        }
    }
    return $contador;
}
// ...funciones definidas arriba...

// Crear un array aleatorio de 10 elementos entre 1 y 50
$array = arrayAleatorio(10, 1, 50);

// Mostrar el array
echo "<ul>";
foreach ($array as $valor) {
    echo "<li>$valor</li>";
}
echo "</ul>";

// Mostrar cantidad de pares
echo "<p>Cantidad de números pares: " . arrayPares($array) . "</p>";
?>