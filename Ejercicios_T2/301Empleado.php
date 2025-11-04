 <!-- Crea una clase Empleado con su nombre, apellidos y sueldo. 
Encapsula las propiedades mediante getters/setters y añade métodos para:
Obtener su nombre completo → getNombreCompleto(): string
Que devuelva un booleano indicando si debe o no pagar impuestos 
(se pagan cuando el sueldo es superior a 3333€) → debePagarImpuestos(): bool -->
<?php
Class Empleado {
// Propiedades
private string $nombre;
private string $apellido;
private float $sueldo;

// Constructor
public function __construct(string $nombre, string $apellido, float $sueldo){
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->sueldo = $sueldo;
}

// getters y setters
public function getNombre(): string
{
return $this->nombre;
}

public function getApellido(): string
{
return $this->apellido;
}

public function getSueldo(): float
{
return $this->sueldo;
}

public function setNombre(string $nombre): self
{
$this->nombre = $nombre;

return $this;
}

public function setApellido(string $apellido): self
{
$this->apellido = $apellido;

return $this;
}

public function setSueldo(float $sueldo): self
{
$this->sueldo = $sueldo;

return $this;
}

// metodo para el nombre completo
public function getNombreCompleto():string {
    return $this->nombre . " " . $this->apellido;
}

// metodo para obtener el sueldo
public function debePagarImpuestos():bool{
    return $this->sueldo > 1200;
    }
}
// Prueba de la clase
$empleado1 = new Empleado("Barry", "Allen", 1500);

echo "Nombre completo: " . $empleado1->getNombreCompleto() . "<br>";
if($empleado1->debePagarImpuestos()){

    echo "Sí debe pagar impuestos.<br>";
} else {
    echo "No debe pagar impuestos.<br>";
}   

?>