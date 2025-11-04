<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <style>

        /*Estilos generados porChatGPT*/ 
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #81ecec, #74b9ff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login {
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 300px;
        }
        h2 {
            color: #0984e3;
            margin-bottom: 20px;
        }
        input[type="text"], input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #b2bec3;
            border-radius: 8px;
        }
        input[type="submit"] {
            background-color: #0984e3;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }
        input[type="submit"]:hover {
            background-color: #74b9ff;
        }
        .error {
            color: red;
            font-weight: bold;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="login">
        <h2>Iniciar Sesión</h2>
        <form action="411login.php" method="POST">
            <input type="text" name="usuario" placeholder="Usuario" required><br>
            <input type="password" name="contrasena" placeholder="Contraseña" required><br>
            <input type="submit" value="Entrar">
        </form>

        <?php if (isset($_GET['error'])): ?>
            <p class="error">Usuario o contraseña incorrectos</p>
        <?php endif; ?>
    </div>
</body>
</html>
