<!-- Mediante el uso de cookies, crea una página con un desplegable 
con varios colores, de manera que el usuario pueda cambiar el color de 
fondo de la página (atributo bgcolor). Al cerrar la página, 
ésta debe recordar, al menos durante 24h, el color elegido y la 
próxima vez que se cargue la pagina, 
lo haga con el último color seleccionado. -->

<?php
// Verifica si el formulario fue enviado mediante el método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtiene el color seleccionado del formulario
    $colorFondo = $_POST['colorFondo'];

    // Crea una cookie llamada 'colorFondo' con el valor seleccionado
    // La cookie dura 24 horas (60 segundos * 60 minutos * 24 horas)
    setcookie('colorFondo', $colorFondo, time() + 60 * 60 * 24);

    // Recarga la misma página para aplicar el nuevo color de fondo
    header("Location: " . $_SERVER['PHP_SELF']);
    exit; // Detiene la ejecución del script después de redirigir
}


// Si la cookie existe, se usa el color guardado.
// Si no existe, se usa el color blanco por defecto.
$colorFondo = isset($_COOKIE['colorFondo']) ? $_COOKIE['colorFondo'] : '#ffffff';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Color de fondo con cookies</title>
</head>

<!-- El color de fondo del body se establece usando el valor de la cookie -->
<!-- htmlspecialchars evita posibles problemas de seguridad (XSS) -->
<body bgcolor="<?php echo htmlspecialchars($colorFondo); ?>">

    <h2>Selecciona el color de fondo</h2>

    <!-- Formulario para elegir el color -->
    <form method="post">
        <select name="colorFondo">
            <!-- Cada opción representa un color posible -->
            <!-- El atributo 'selected' marca la opción actual guardada en la cookie -->
            <option value="#ffffff" <?php if ($colorFondo == '#ffffff') echo 'selected'; ?>>Blanco</option>
            <option value="#f8d7db" <?php if ($colorFondo == '#f8d7bc') echo 'selected'; ?>>Rosa claro</option>
            <option value="#d4edda" <?php if ($colorFondo == '#d4edda') echo 'selected'; ?>>Verde claro</option>
            <option value="#d1ecf1" <?php if ($colorFondo == '#d1ecf1') echo 'selected'; ?>>Azul claro</option>
            <option value="#fd34f3" <?php if ($colorFondo == '#fefefe') echo 'selected'; ?>>Rosa</option>
        </select>

        <!-- Botón para guardar el color seleccionado -->
        <button type="submit">Guardar color</button>
    </form>

</body>

</html>
