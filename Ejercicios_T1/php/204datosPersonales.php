<?php

        $nombre = $_GET["nombre"];
        $apellido1 = $_GET["apellido1"];
        $apellido2 = $_GET["apellido2"];
        $email = $_GET["email"];
        $anyoNacimiento = $_GET["anyoNacimiento"];
        $telefono = $_GET["telefono"];

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