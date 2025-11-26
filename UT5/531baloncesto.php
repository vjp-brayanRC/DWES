<?php
$url = "https://www.seleccionbaloncesto.es/inicio.aspx";  // o la URL concreta donde está la tabla
$html = file_get_contents($url);
if ($html === false) {
    die("Error al descargar la página");
}

// Usaremos DOMDocument + DOMXpath para parsear la tabla
libxml_use_internal_errors(true);
$doc = new DOMDocument();
$doc->loadHTML($html);
$xpath = new DOMXpath($doc);

// Ajusta el selector XPath al lugar donde está la tabla: nombre, altura, edad.
// Por ejemplo, si la tabla tiene <table> y <tr><td>Nombre</td><td>Altura</td><td>Edad</td>…
$rows = $xpath->query("//table//tr"); 

$totalJugadores = 0;
$sumaAltura = 0.0;
$sumaEdad = 0;

foreach ($rows as $row) {
    $cells = $xpath->query("td", $row);
    if ($cells->length >= 3) {
        // asumir que la altura está en la segunda celda y la edad en la tercera (ajusta según la tabla real)
        $alturaStr = trim($cells->item(1)->textContent);
        $edadStr   = trim($cells->item(2)->textContent);

        // convertir altura a metros (si está en “2,02” con coma) y edad a int
        $alturaStr = str_replace(",", ".", $alturaStr);  // coma a punto
        if (is_numeric($alturaStr) && is_numeric($edadStr)) {
            $altura = (float) $alturaStr;
            $edad   = (int) $edadStr;

            $sumaAltura += $altura;
            $sumaEdad   += $edad;
            $totalJugadores++;
        }
    }
}

if ($totalJugadores > 0) {
    $mediaAltura = $sumaAltura / $totalJugadores;
    $mediaEdad   = $sumaEdad   / $totalJugadores;

    echo "Altura media: " . round($mediaAltura, 2) . " m<br>";
    echo "Edad media:   " . round($mediaEdad, 1) . " años";
} else {
    echo "No se encontraron jugadores válidos para calcular.\n";
}
?>

