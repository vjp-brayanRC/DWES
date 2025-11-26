<!-- Copia la clase del ejercicio anterior y modifícala. 
Cambia la constante por una variable estática sueldoTope, 
de manera que mediante getter/setter
 puedas modificar su valor. -->

 <?php
class Empleado {
    // Variable estática (compartida por todos los empleados)
    private static float $sueldoTope = 1200;

    // Propiedades
    private string $nombre;
    private string $apellido;
    private float $sueldo;
    private array $numTelefono = [];

    // Constructor con sueldo por defecto
    public function __construct(string $nombre, string $apellido, float $sueldo = 1100){
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

    // Getter y Setter estáticos para sueldoTope
    public static function getSueldoTope(): float {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(float $nuevoTope): void {
        self::$sueldoTope = $nuevoTope;
    }

    // Setters normales
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

    // Método para saber si paga impuestos (usa la variable estática)
    public function debePagarImpuestos(): bool {
        return $this->sueldo > self::$sueldoTope;
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
echo $empleado->debePagarImpuestos() ? "Debe pagar impuestos<br>" : "No debe pagar impuestos<br>";

// Cambiar el sueldo tope
Empleado::setSueldoTope(1600);
echo "Nuevo sueldo tope: " . Empleado::getSueldoTope() . "<br>";
echo $empleado->debePagarImpuestos() ? "Debe pagar impuestos<br>" : "No debe pagar impuestos<br>";
?>
