<!-- 408fondoSesion2.php: Debe mostrar el color y dar 
la posibilidad de:
volver a la página anterior mediante un enlace
y mediante otro enlace, vaciar la sesión y volver a la página anterior. -->

<?php
session_start();

// Si se pidió vaciar la sesión
if (isset($_GET['accion']) && $_GET['accion'] === 'borrar') {
    session_unset();
    session_destroy();
    header("Location: 408fondoSesion1.php");
    exit;
}

// Color actual en sesión
$colorFondo = isset($_SESSION['colorFondo']) ? $_SESSION['colorFondo'] : '#ffffff';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sesión de color</title>
</head>
<body bgcolor="<?php echo htmlspecialchars($colorFondo); ?>">

    <h2>Color de fondo actual: <?php echo htmlspecialchars($colorFondo); ?></h2>

    <p><a href="408fondoSesion1.php">Volver a la página anterior</a></p>
    <p><a href="408fondoSesion2.php?accion=borrar">Vaciar sesión y volver</a></p>

</body>
</html>
