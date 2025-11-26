<?php
require __DIR__ . '/vendor/autoload.php';  // <-- Esto es clave

use Brodriguezc05\Composer\502inicio\HolaMonolog;

use Dwes\Monologos\HolaMonolog;

$miHola = new HolaMonolog();
echo $miHola->saludar('Brayan');
?>
