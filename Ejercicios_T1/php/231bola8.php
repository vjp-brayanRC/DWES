 <!-- A partir del anterior, crea un programa que muestre la pregunta recibida y genere una 
 respuesta de manera aleatoria entre un conjunto de respuestas predefinidas, almacenadas 
 en un array: Si, no, quizás, claro que sí, por supuesto que no, 
 no lo tengo claro, seguro, yo diría que sí, ni de coña, etc...
Este ejercicio se basa en el juego de la Bola 8 mágica. -->

<?php
$respuestas = [
    "Sí", "No", "Quizás", "Claro que sí", "Por supuesto que no",
    "No lo tengo claro", "Seguro", "Yo diría que sí", "Yo diría que no", "Ni de coña"
];

// Recoge la pregunta del formulario
$pregunta = $_POST['pregunta'];

// Selecciona una respuesta aleatoria
$respuesta = $respuestas[array_rand($respuestas)];

// Muestra la pregunta y la respuesta
echo "<h2>Pregunta: $pregunta</h2>";
echo "<h3>Respuesta de la Bola 8: $respuesta</h3>";
?>