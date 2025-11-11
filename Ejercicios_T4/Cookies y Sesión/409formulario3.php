<?php
session_start();

// Guardar datos del segundo formulario
$_SESSION['numConvivientes'] = $_POST['numConvivientes'] ?? '';
$_SESSION['aficiones'] = $_POST['aficiones'] ?? [];
$_SESSION['menu'] = $_POST['menu'] ?? [];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resumen del formulario</title>
</head>
<body>
    <h2>Resumen de datos enviados</h2>
    <table border="1">
        <tr><th>Campo</th><th>Valor</th></tr>
        <tr><td>Nombre y apellidos</td><td><?php echo htmlspecialchars($_SESSION['nombreApellidos']); ?></td></tr>
        <tr><td>Email</td><td><?php echo filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL) ? $_SESSION['email'] : 'Email no válido'; ?></td></tr>
        <tr><td>URL</td><td><?php echo filter_var($_SESSION['url'], FILTER_VALIDATE_URL) ? $_SESSION['url'] : 'URL no válida'; ?></td></tr>
        <tr><td>Sexo</td><td><?php echo htmlspecialchars($_SESSION['sexo']); ?></td></tr>
        <tr><td>Convivientes</td><td><?php echo filter_var($_SESSION['numConvivientes'], FILTER_VALIDATE_INT, ["options"=>["min_range"=>0, "max_range"=>20]]) !== false ? $_SESSION['numConvivientes'] : 'Número no válido'; ?></td></tr>
        <tr><td>Aficiones</td><td><?php echo implode(", ", $_SESSION['aficiones']); ?></td></tr>
        <tr><td>Menú favorito</td><td><?php echo implode(", ", $_SESSION['menu']); ?></td></tr>
    </table>

    <p><a href="409formulario1.php">Volver al inicio</a></p>
</body>
</html>
