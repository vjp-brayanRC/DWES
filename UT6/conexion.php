<?php
$host = "localhost"; // Servidor de la base de datos
$dbname = "lol";     // Nombre de la base de datos
$user = "root";       // Usuario de la base de datos
$pass = "";           // Contraseña del usuario

try {
    // Crea la conexión PDO con la base de datos y codificación UTF-8
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configura errores como excepciones
} catch(PDOException $e) { 
    // Captura cualquier error de conexión y termina la ejecución mostrando el mensaje
    die("Error de conexión: " . $e->getMessage()); 
}
?>

