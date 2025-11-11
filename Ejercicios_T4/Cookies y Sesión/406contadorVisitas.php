<!-- Mediante el uso de cookies, informa al usuario de si es su 
 primera visita, o si no lo es, muestre su valor (valor de un contador). 
 Además, debes permitir 
 que el usuario reinicialice su contador de visitas. -->

 <?php
// Si el usuario ha pedido reiniciar el contador
if (isset($_GET['reset']) && $_GET['reset'] == 'true') {
    setcookie('contador', '', time() - 3600); // Elimina la cookie
    echo "<p>Contador reiniciado. <a href='?'>Volver a empezar</a></p>";
} else {
    // Si ya existe la cookie 'contador'
    if (isset($_COOKIE['contador'])) {
        $contador = $_COOKIE['contador'] + 1;
        setcookie('contador', $contador, time() + 3600 * 24 * 365); // Guarda por 1 año
        echo "<p>Bienvenido de nuevo. Esta es tu visita número <strong>$contador</strong>.</p>";
    } else {
        // Primera visita
        setcookie('contador', 1, time() + 3600 * 24 * 365); // Guarda por 1 año
        echo "<p>¡Bienvenido! Esta es tu <strong>primera visita</strong>.</p>";
    }

    // Enlace para reiniciar el contador
    echo "<p><a href='?reset=true'>Reiniciar contador</a></p>";
}
?>
