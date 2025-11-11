<!-- Haciendo uso de la sesión, vamos a dividir el formulario del ejercicio 402formulario.php en 2 subformularios:
409formulario1.php envía los datos (nombre y apellidos, email, url y sexo) a 409formulario2.php.
409formulario2.php lee los datos y los mete en la sesión. 
A continuación, muestra el resto de campos 
del formulario a rellenar (convivientes, aficiones y menú). 
Envía estos datos a 409formulario3.php.
409formulario3.php recoge los datos enviados en el paso anterior y 
junto a los que ya estaban en la sesión, se muestran todos los datos en una tabla/lista desordenada. -->

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Paso 1 - Datos personales</title>
</head>
<body>
    <h2>Formulario - Paso 1</h2>
    <form action="409formulario2.php" method="post">
        <label>Nombre y apellidos: <input type="text" name="nombreApellidos" required></label><br><br>
        <label>Email: <input type="email" name="email" required></label><br><br>
        <label>URL página personal: <input type="url" name="url"></label><br><br>
        <label>Sexo:</label><br>
        <input type="radio" name="sexo" value="Masculino" required> Masculino<br>
        <input type="radio" name="sexo" value="Femenino"> Femenino<br>
        <input type="radio" name="sexo" value="Otro"> Otro<br><br>
        <button type="submit">Siguiente</button>
    </form>
</body>
</html>