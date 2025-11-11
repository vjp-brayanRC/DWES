<!-- Modifica el ejercicio anterior para que únicamente permita 
subir imágenes (comprueba la propiedad type del archivo subido).
Si el usuario selecciona otro tipo de archivos, se le debe informar 
del error y permitir que suba un nuevo archivo.
En el caso de subir el tipo correcto, visualizar la imagen 
con el tamaño de anchura y altura recibido como parámetro. -->

<?php
// Verifica que el formulario se haya enviado por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Verifica que se haya subido un archivo sin errores
    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
        $archivoTmp = $_FILES['archivo']['tmp_name'];

        // Obtiene el tipo MIME del archivo subido
        $tipo = mime_content_type($archivoTmp);

        // Verifica que el archivo sea una imagen
        if (strpos($tipo, 'image/') === 0) {
            // Obtiene los valores de anchura y altura enviados por el formulario
            $ancho = isset($_POST['anchura']) ? intval($_POST['anchura']) : 0;
            $alto = isset($_POST['altura']) ? intval($_POST['altura']) : 0;

            // Verifica que los valores sean válidos
            if ($ancho > 0 && $alto > 0) {
                // Convierte la imagen a base64 para mostrarla directamente
                $imagen = base64_encode(file_get_contents($archivoTmp));

                // Muestra la imagen con las dimensiones indicadas
                echo "Imagen subida correctamente.\n";
                echo "<img src='data:$tipo;base64,$imagen' width='$ancho' height='$alto'>\n";
                echo "Dimensiones: $ancho x $alto px";
            } else {
                // Error si las dimensiones no son válidas
                echo "Error: La anchura y altura deben ser mayores que cero.";
            }
        } else {
            // Error si el archivo no es una imagen
            echo "Error: Solo se permiten archivos de imagen.";
        }
    } else {
        // Error si no se subió ningún archivo o hubo un problema
        echo "Error: No se ha subido ningún archivo o hubo un problema.";
    }
} else {
    // Acceso no permitido si no es una solicitud POST
    echo "Acceso no permitido.";
}
?>