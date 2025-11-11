<?php
require __DIR__ . '/vendor/autoload.php';

use Dwes\Monologos\HolaMonolog;

// Prueba con una hora válida
$hola = new HolaMonolog(10);
$hola->saludar();
$hola->despedir();

// Prueba con una hora inválida
$hola2 = new HolaMonolog(30);
$hola2->saludar();
$hola2->despedir();
