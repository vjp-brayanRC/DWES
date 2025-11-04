<!-- 404subida.html y 404subida.php: Crea un 
 formulario que permita subir un archivo al s
 ervidor. Además del fichero, debe pedir en el 
 mismo formulario dos campos numéricos que soliciten 
 la anchura y la altura. Comprueba que tanto el fichero como 
 los datos llegan correctamente. -->

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Comprobación de archivo
    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
        $archivoNombre = $_FILES['archivo']['name'];
        $archivoTmp = $_FILES['archivo']['tmp_name'];
        $archivoDestino = 'uploads/' . basename($archivoNombre);

        // Comprobación de anchura y altura
        $anchura = isset($_POST['anchura']) ? intval($_POST['anchura']) : null;
        $altura = isset($_POST['altura']) ? intval($_POST['altura']) : null;

        if ($anchura > 0 && $altura > 0) {
            // Mover archivo
            if (move_uploaded_file($archivoTmp, $archivoDestino)) {
                echo "Archivo subido correctamente.<br>";
                echo "Anchura: $anchura px<br>";
                echo "Altura: $altura px<br>";
            } else {
                echo "Error al mover el archivo.";
            }
        } else {
            echo "Anchura y altura deben ser mayores que cero.";
        }
    } else {
        echo "No se ha subido ningún archivo o hubo un error.";
    }
} else {
    echo "Acceso no permitido.";
}
?>