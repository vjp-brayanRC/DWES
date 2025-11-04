<?php
class Empleado {
    // Propiedades
    private string $nombre;
    private string $apellido;
    private float $sueldo;
    private array $numTelefono = [];

    // Constructor
    public function __construct(string $nombre, string $apellido, float $sueldo){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sueldo = $sueldo;
    }

    // Getters
    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellido(): string {
        return $this->apellido;
    }

    public function getSueldo(): float {
        return $this->sueldo;
    }

    public function getNumTelefono(): array {
        return $this->numTelefono;
    }

    // Setters
    public function setNombre(string $nombre): self {
        $this->nombre = $nombre;
        return $this;
    }

    public function setApellido(string $apellido): self {
        $this->apellido = $apellido;
        return $this;
    }

    public function setSueldo(float $sueldo): self {
        $this->sueldo = $sueldo;
        return $this;
    }

    public function setNumTelefono(array $numTelefono): self {
        $this->numTelefono = $numTelefono;
        return $this;
    }

    // Método para el nombre completo
    public function getNombreCompleto(): string {
        return $this->nombre . " " . $this->apellido;
    }

    // Método para saber si paga impuestos
    public function debePagarImpuestos(): bool {
        return $this->sueldo > 1200;
    }

    // Añadir teléfono al array
    public function anyadirTelefono(int $telefono): void {
        $this->numTelefono[] = $telefono;
    }

    // Listar teléfonos separados por coma
    public function listarTelefonos(): string {
        return implode(", ", $this->numTelefono);
    }

    // Vaciar todos los teléfonos
    public function vaciarTelefonos(): void {
        $this->numTelefono = [];
    }
}

// Prueba de la clase
$empleado = new Empleado("Barry", "Allen", 1500);

echo "Nombre completo: " . $empleado->getNombreCompleto() . "<br>";

if ($empleado->debePagarImpuestos()) {
    echo "Sí debe pagar impuestos.<br>";
} else {
    echo "No debe pagar impuestos.<br>";
}

// Probando teléfonos
$empleado->anyadirTelefono(123456789);
$empleado->anyadirTelefono(987654321);

echo "Teléfonos: " . $empleado->listarTelefonos() . "<br>";

$empleado->vaciarTelefonos();
echo "Teléfonos tras vaciar: " . $empleado->listarTelefonos() . "<br>";
?>
