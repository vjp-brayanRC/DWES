<!-- a partir de los datos de todas las cajas de la página 
anterior, súmalos y muestra el total. -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cantidad'])) {
    $cantidad = intval($_POST['cantidad']);
    $suma = 0;
    for ($i = 1; $i <= $cantidad; $i++) {
        if (isset($_POST['dato' . $i]) && is_numeric($_POST['dato' . $i])) {
            $suma += floatval($_POST['dato' . $i]);
        }
    }
    echo 'La suma de los datos introducidos es: ' . $suma;
} else {
    echo 'No se han recibido datos para sumar.';
}
?>