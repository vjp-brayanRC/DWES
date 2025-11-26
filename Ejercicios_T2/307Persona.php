<!-- Copia la clase del ejercicio anterior 
 en 307Empleado.php y modifícala.
Crea una clase Persona que sea padre de Empleado, 
de manera que Persona contenga el nombre y los apellidos, 
y en Empleado quede el salario y los teléfonos. -->

<?php
class Persona {

    // Propiedades
    protected string $nombre;
    protected string $apellido;
    

    // Constructor
    public function __construct(string $nombre, string $apellido){
        $this->nombre = $nombre;
        $this->apellido = $apellido;

    }

    // Getters
    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellido(): string {
        return $this->apellido;
    }

    // Método para el nombre completo
    public function getNombreCompleto(): string {
        return $this->nombre . " " . $this->apellido;
    }
}

// Clase hija de Persona

Class Empleado extends Persona{

    // Variable estática
    private static float $sueldoTope = 1200;

    // Variavles Privadas
    private float $sueldo;
    private array $numTelefono = [];

    public function __construct(string $nombre, string $apellido, float $sueldo = 1100 ) {
        parent::__construct($nombre, $apellido);
        $this ->sueldo = $sueldo;
    }

    // getters
    public function getSueldo(): float{
        return $this->sueldo;
    }

    public function getNumTelefono(): array{
        return $this->numTelefono;
    }

    public static function getSueldoTope(): float {
        return self::$sueldoTope;
    }

    // setters
    public function setSueldo(float $sueldo): self{
        $this->sueldo = $sueldo;
        return $this;
    }

    public function setNumTelefono(array $numTelefono): self{
        $this->numTelefono = $numTelefono;
        return $this;
    }

    public static function setSueldoTope(float $nuevoTope): void {
        self::$sueldoTope = $nuevoTope;
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

    // Método para mostrar datos en HTML
    public function mostrarDatosHTML(): string {
        $html = "<p>Nombre: " . $this->getNombreCompleto() . " | Sueldo: " . $this->sueldo . "€</p>";
        if (!empty($this->numTelefono)) {
            $html .= "<ol>";
            foreach ($this->numTelefono as $telefono) {
                $html .= "<li>" . $telefono . "</li>";
            }
            $html .= "</ol>";
        } else {
            $html .= "<p>No tiene teléfonos registrados.</p>";
        }
        return $html;
    }
    
}

// Prueba de la clase
$empleado = new Empleado("Barry", "Allen", 1500);
$empleado->anyadirTelefono(123456789);
$empleado->anyadirTelefono(987654321);

// Mostrar datos en HTML
echo $empleado->mostrarDatosHTML();