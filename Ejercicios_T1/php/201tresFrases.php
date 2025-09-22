<!-- Muestra 3 frases, cada una en un párrafo utilizando las tres posibilidades que existen de mostrar contenido. Tras ello, 
introduce dos comentarios, uno de bloque y otro de una línea. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tres Frases</title>
</head>
<body>
    <p><?php echo "Esto es mi primera frase"; ?> </p>
    <p><?= "Esto es mi segunda frase" ?> </p>
    <p><?php print ("Esto es mi tercera frase") ?> </p>
</body>
</html>