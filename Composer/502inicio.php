<?php
require __DIR__ . '/vendor/autoload.php';  // <-- Esto es clave

use Dwes\Monologos\HolaMonolog;

$miHola = new HolaMonolog();
echo $miHola->saludar('Brayan');
