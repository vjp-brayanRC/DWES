<!-- Copia la clase del ejercicio anterior y modifícala. 
Elimina los setters de nombre y apellidos, 
de manera que dichos datos se asignan mediante 
el constructor (utiliza la sintaxis de PHP7). 
Si el constructor recibe un tercer parámetro, 
será el sueldo del Empleado. 
Si no, se le asignará 1000€ como sueldo inicial. -->

<?php
class Empleado {
    // Propiedades
    private string $nombre;
    private string $apellido;
    private float $sueldo;
    private array $numTelefono = [];

    // Constructor con sueldo opcional
    public function __construct(string $nombre, string $apellido, float $sueldo = 1000){
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

    // Setter solo para sueldo y teléfonos
    public function setSueldo(float $sueldo): self {
        $this->sueldo = $sueldo;
        return $this;
    }

    public function setNumTelefono(array $numTelefono): self {
        $this->numTelefono = $numTelefono;
        return $this;
    }

    // Nombre completo
    public function getNombreCompleto(): string {
        return $this->nombre . " " . $this->apellido;
    }

    // Ver si paga impuestos
    public function debePagarImpuestos(): bool {
        return $this->sueldo > 1200;
    }

    // Manejo de teléfonos
    public function anyadirTelefono(int $telefono): void {
        $this->numTelefono[] = $telefono;
    }

    public function listarTelefonos(): string {
        return implode(", ", $this->numTelefono);
    }

    public function vaciarTelefonos(): void {
        $this->numTelefono = [];
    }
}

// Prueba de la clase (más corta)
$empleado = new Empleado("Barry", "Allen", 1500);

echo $empleado->getNombreCompleto() . "<br>";
echo $empleado->debePagarImpuestos() ? "Debe pagar impuestos<br>" : "No debe pagar impuestos<br>";

$empleado->anyadirTelefono(123456789);
$empleado->anyadirTelefono(987654321);

echo "Teléfonos: " . $empleado->listarTelefonos() . "<br>";
?>
