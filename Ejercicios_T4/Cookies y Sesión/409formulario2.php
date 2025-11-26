<?php
session_start();

// Guardar datos del primer formulario
$_SESSION['nombreApellidos'] = $_POST['nombreApellidos'] ?? '';
$_SESSION['email'] = $_POST['email'] ?? '';
$_SESSION['url'] = $_POST['url'] ?? '';
$_SESSION['sexo'] = $_POST['sexo'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Paso 2 - Información adicional</title>
</head>
<body>
    <h2>Formulario - Paso 2</h2>
    <form action="409formulario3.php" method="post">
        <label>Número de convivientes: <input type="number" name="numConvivientes" min="0" max="20" required></label><br><br>

        <label>Aficiones:</label><br>
        <input type="checkbox" name="aficiones[]" value="Lectura"> Lectura<br>
        <input type="checkbox" name="aficiones[]" value="Deporte"> Deporte<br>
        <input type="checkbox" name="aficiones[]" value="Música"> Música<br>
        <input type="checkbox" name="aficiones[]" value="Viajar"> Viajar<br><br>

        <label>Menú favorito:</label><br>
        <select name="menu[]" multiple size="4" required>
            <option value="Vegetariano">Vegetariano</option>
            <option value="Vegano">Vegano</option>
            <option value="Omnívoro">Omnívoro</option>
            <option value="Sin gluten">Sin gluten</option>
        </select><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>