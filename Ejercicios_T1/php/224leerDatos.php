<!-- a partir de cantidad, prepara un formulario con tantas cajas de datos como su valor. -->

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cantidad'])) {
    $cantidad = intval($_POST['cantidad']);
    if ($cantidad > 0) {
        echo '<form method="post" action="224sumarDatos.php">';
        echo '<input type="hidden" name="cantidad" value="' . $cantidad . '">';
        for ($i = 1; $i <= $cantidad; $i++) {
            echo 'Dato ' . $i . ': <input type="text" name="dato' . $i . '"><br>';
        }
        echo '<input type="submit" value="Sumar Datos">';
        echo '</form>';
    } else {
        echo 'Por favor, introduce un número positivo.';
    }
} else {
    echo 'No se ha recibido la cantidad de datos a introducir.';
}
