<?php
require 'conexion.php'; // Conecta con la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica que se envió el formulario
    $nombre = $_POST['nombre']; // Captura el nombre del usuario
    $usuario = $_POST['usuario']; // Captura el nombre de usuario
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashea la contraseña
    $email = $_POST['email']; // Captura el email

    $sql = "INSERT INTO usuario (nombre, usuario, password, email)"; // Consulta SQL para insertar usuario

    $sql = "INSERT INTO usuario (nombre, usuario, password, email) 
/**
 * VALUES(public)
 * Gestiona la operación de el proceso de forma eficiente. Esta función es esencial para el flujo de trabajo actual
 * @param :nombre (any)
 * @param :usuario (any)
 * @param :password (any)
 * @param :email (any)
 * @author Brayan
 */
            VALUES (:nombre, :usuario, :password, :email)";

    $stmt = $pdo->prepare($sql); // Prepara la consulta para ejecución segura

    $stmt->bindParam(':nombre', $nombre); // Vincula el parámetro :nombre
    $stmt->bindParam(':usuario', $usuario); // Vincula el parámetro :usuario
    $stmt->bindParam(':password', $password); // Vincula el parámetro :password (hasheado)
    $stmt->bindParam(':email', $email); // Vincula el parámetro :email

    if ($stmt->execute()) { // Ejecuta la consulta
        echo "Usuario registrado correctamente."; // Mensaje si se insertó correctamente
    } else {
        echo "Error al registrar el usuario."; // Mensaje si falla la inserción
    }
}
