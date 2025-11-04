<?php
session_start();

$usuario_valido = 'admin';
$contrasena_valida = '1234';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $contrasena = $_POST['contrasena'] ?? '';

    if ($usuario === $usuario_valido && $contrasena === $contrasena_valida) {
        // Guardamos usuario y datos en sesión
        $_SESSION['usuario'] = $usuario;
        $_SESSION['peliculas'] = ['El Padrino', 'Inception', 'Parásitos'];
        $_SESSION['series'] = ['Breaking Bad', 'Stranger Things', 'The Office'];

        header('Location: 412peliculas.php');
        exit;
    } else {
        header('Location: 410index.php?error=1');
        exit;
    }
}
?>
