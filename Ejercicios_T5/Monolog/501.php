<!-- Crea un nuevo proyecto con Composer llamado Monologos:

Incluye como librería la última versión de Monolog.
Crea la clase Dwes\Monologos\HolaMonolog.
Define una propiedad privada nombrada miLog para guardar el log.
Define en el constructor un RotatingFileHandler que escriba en la carpeta logs del proyecto, y que almacene los mensajes a partir de debug.
Crea los métodos saludar y despedir que hagan un log de tipo info con la acción correspondiente. -->

<?php
require_once __DIR__ . '/vendor/autoload.php';

namespace Dwes\Monologos;

use Monolog\Logger;
use Monolog\Handler\RotatingFileHandler;

class HolaMonolog {
    private $miLog;

    public function __construct() {
        $this->miLog = new Logger('monologos');

       $handler = new RotatingFileHandler(__DIR__ . '/logs/monoLogos.log', 7, Logger::DEBUG);
        $this->miLog->pushHandler($handler);
    }

    public function saludar(string $nombre) {
        $mensaje = "Saludo a $nombre";
        $this->miLog->info($mensaje);
        echo $mensaje . PHP_EOL;
    }

    public function despedir(string $nombre) {
        $mensaje = "Despedida a $nombre";
        $this->miLog->info($mensaje);
        echo $mensaje . PHP_EOL;
    }
}
