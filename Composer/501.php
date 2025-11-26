<?php
namespace Brodriguezc05\Composer\Monologos;

use Monolog\Logger;
use Monolog\Handler\RotatingFileHandler;

class HolaMonolog {
    private $miLog;

    public function __construct() {
        $this->miLog = new Logger('monologos');
        $handler = new RotatingFileHandler(__DIR__ . '/logs/monoLogos.log', 0, Logger::DEBUG);
        $this->miLog->pushHandler($handler);
    }

    public function saludar($nombre) {
        $this->miLog->info("Hola, $nombre");
        return "Hola, $nombre";
    }

    public function despedir($nombre) {
        $this->miLog->info("Adiós, $nombre");
        return "Adiós, $nombre";
    }
}
