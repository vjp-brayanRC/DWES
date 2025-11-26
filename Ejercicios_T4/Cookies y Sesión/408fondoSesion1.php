<!-- Modifica el ejercicio anterior para almacenar el color de fondo en 
la sesión y no emplear cookies. Además, debe contener un enlace al
siguiente archivo.  -->

<?php
session_start();

// Si se envió el formulario, guarda el color en la sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['colorFondo'] = $_POST['colorFondo'];
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Si hay color en la sesión, úsalo; si no, blanco por defecto
$colorFondo = isset($_SESSION['colorFondo']) ? $_SESSION['colorFondo'] : '#ffffff';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Color de fondo con sesión</title>
</head>
<body bgcolor="<?php echo htmlspecialchars($colorFondo); ?>">

    <h2>Selecciona el color de fondo</h2>

    <form method="post">
        <select name="colorFondo">
            <option value="#ffffff" <?php if ($colorFondo == '#ffffff') echo 'selected'; ?>>Blanco</option>
            <option value="#f8d7db" <?php if ($colorFondo == '#f8d7db') echo 'selected'; ?>>Rosa claro</option>
            <option value="#d4edda" <?php if ($colorFondo == '#d4edda') echo 'selected'; ?>>Verde claro</option>
            <option value="#d1ecf1" <?php if ($colorFondo == '#d1ecf1') echo 'selected'; ?>>Azul claro</option>
            <option value="#fd34f3" <?php if ($colorFondo == '#fd34f3') echo 'selected'; ?>>Rosa</option>
        </select>
        <button type="submit">Guardar color</button>
    </form>

    <p><a href="408fondoSesion2.php">Ir a la página de sesión</a></p>

</body>
</html>