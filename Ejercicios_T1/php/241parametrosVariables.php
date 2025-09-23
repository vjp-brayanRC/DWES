<!-- Crea las siguientes funciones:
Una función que devuelva el mayor de todos los números recibidos como parámetros: function mayor():
 int. Utiliza las funciones func_get_args(), etc... No puedes usar la función max().
Una función que concatene todos los parámetros recibidos separándolos con un espacio: 
function concatenar(...$palabras) : string. Utiliza el operador .... -->

<?php
// Función que devuelve el mayor de todos los números recibidos como parámetros 
function mayor(): int {
    $numeros = func_get_args();
    $max = $numeros[0];
    foreach ($numeros as $num) {
        if ($num > $max) {
            $max = $num;
        }
    }
    return $max;
}
// Función que concatena 
function concatenar(...$palabras): string {
    return implode(" ", $palabras);
}

echo "Mayor: " . mayor(3, 5, 2, 8, 1) . "<br>";
echo "Concatenado: " . concatenar("Hola", "mundo!", "¿Cómo", "estás?") . "<br>";
?>