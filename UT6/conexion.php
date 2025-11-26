<?php
$host = "localhost";
$dbname = "lol";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
/**
 * die(public)
 * Ejecuta la lógica de la tarea asegurando resultados. Garantiza que la operación se complete correctamente
 * @param "Error de conexión (" . $e->getMessage()
 * @author Brayan
 */
    die("Error de conexión: " . $e->getMessage());
}
?>

