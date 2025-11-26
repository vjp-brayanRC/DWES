<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: 410index.php');
    exit;
}
$peliculas = $_SESSION['peliculas'] ?? [];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Películas</title>
    <style>

        /*Estilos generados porChatGPT*/ 
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #74b9ff, #a29bfe);
            color: #333;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .contenedor {
            background: #fff;
            padding: 40px 50px;
            border-radius: 16px;
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }
        h1 {
            color: #0984e3;
            margin-bottom: 25px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            background: #dfe6e9;
            margin: 10px 0;
            padding: 12px;
            border-radius: 8px;
            transition: 0.3s ease;
            font-weight: 500;
        }
        li:hover {
            background: #74b9ff;
            color: white;
            transform: scale(1.05);
        }
        nav {
            margin-top: 20px;
        }
        nav a {
            text-decoration: none;
            color: #0984e3;
            margin: 0 10px;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="contenedor">
    <h1>🎬 Listado de Películas</h1>

    <ul>
        <?php foreach ($peliculas as $p): ?>
            <li><?= htmlspecialchars($p) ?></li>
        <?php endforeach; ?>
    </ul>

    <nav>
        <a href="414series.php">Series</a> |
        <a href="413logout.php">Cerrar Sesión</a>
    </nav>
</div>
</body>
</html>

