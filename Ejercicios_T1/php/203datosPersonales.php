<!-- Escribe un programa que almacene en variables tu nombre, 
primer apellido, segundo apellido, email, año de nacimiento 
y teléfono. Luego muéstralos por pantalla dentro de una tabla. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos personales php</title>
</head>
<body>

    <?php

        $nombre = "Brayan";
        $apellido1 = "Rodríguez";
        $apellido2 = "Collado";
        $email = "brodriguezc05@vjp.es";
        $anyoNacimiento = "1999";
        $telefono ="722258675";

        echo "<table border='1'>
                <tr>
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Email</th>
                    <th>Año de Nacimiento</th>
                    <th>Teléfono</th>
                </tr>
                <tr>
                    <td>$nombre</td>
                    <td>$apellido1</td>
                    <td>$apellido2</td>
                    <td>$email</td>
                    <td>$anyoNacimiento</td>
                    <td>$telefono</td>
                </tr>
            </table>";
        ?>

</body>
</html>